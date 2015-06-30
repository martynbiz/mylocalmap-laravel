<?php namespace App\Library\Mongo;

use MongoClient;
use MongoId;

class DB
{
    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * Get the next in sequence number
     */
    static public function getNextSequence($name)
    {
        // set our controller's model
        $client = new MongoClient();
        $db = $client->selectDB( env('MONGO_DB') );

        $ret = $db->counters->findAndModify(
            array( '_id' => $name),
            array('$inc' => array('seq' => 1)),
            array(),
            array('new' => true)
        );

        return $ret["seq"];
    }
}
