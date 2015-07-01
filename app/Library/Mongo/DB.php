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
     public function insert($values)
     {
         // protect against mass assignment
         if (!isset($this->fillable) or !is_array($this->fillable))
            throw new \Exception('Fillable array not set.');
         $values = array_intersect_key($values, array_flip($this->fillable));

         // only if _id is not set, we'll use sequence
         if (!isset($values['_id'])) {
             $seq = $this->getNextSequence( $this->col->getName() );
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
      function find($query=[])
      {
          $cursor = $this->col->find($query);

          return iterator_to_array($cursor);
      }

    /**
     * Get the next in sequence number
     */
    public function getNextSequence($name)
    {
        $ret = $this->db->counters->findAndModify(
            array( '_id' => $name),
            array('$inc' => array('seq' => 1)),
            array(),
            array('new' => true)
        );

        return $ret["seq"];
    }
}
