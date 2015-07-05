<?php namespace App\Library\Mongo;

use MongoClient;
use MongoId;

class DB
{
    /**
    *
    */
    protected $db;

    /**
    * The collection for the extending class
    */
    protected $col;

    /**
    *
    */
    public function __construct(MongoClient $conn, $dbname)
    {
        // if $collection is not set, throw exception
        if (!isset($this->collection))
        throw new \Exception('Collection name not set');

        // set the collection name
        $collectionName = $this->collection;

        $this->db = $conn->selectDB($dbname);
        $this->col = $this->db->$collectionName;
    }

    /**
    *
    */
    public function insert(&$values)
    {
        // protect against mass assignment
        if (!isset($this->fillable) or !is_array($this->fillable))
            throw new \Exception('Fillable array not set.');

        // remove any keys not within fillable, and set defaults
        // $values = array_intersect_key($values, array_flip($this->fillable));
        $values = array_intersect_key($values, $this->fillable);
        $values = array_merge($this->fillable, $values);

        // only if _id is not set, we'll use sequence
        if (!isset($values['_id'])) {
            $seq = $this->getNextSequence();
            $values = array_merge( array(
                '_id' => $seq,
            ), $values);
        }

        // do the insert
        $this->col->insert($values);
    }

    /**
    *
    */
    function find($query=[], $options=[])
    {
        // set defaults
        $options = array_merge([
            'userKeys' => false,
        ], $options);

        $cursor = $this->col->find($query);

        return iterator_to_array($cursor, $options['userKeys']);
    }

    /**
    *
    */
    function findOneOrFail($query)
    {
        if (!$doc = $this->col->findOne($query))
            throw new \Exception('ID not found.');

        return $doc;
    }

    /**
    *
    */
    function remove($query=[])
    {
        $this->col->remove($query);
    }

    /**
    * Get the next in sequence number
    */
    public function getNextSequence()
    {
        $ret = $this->db->counters->findAndModify(
        array( '_id' => $this->col->getName()),
        array('$inc' => array('seq' => 1)),
        array(),
        array('new' => true)
        );

        return $ret["seq"];
    }
}
