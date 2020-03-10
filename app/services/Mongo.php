<?php

class Mongo {

    private $config;
    private $collection;
    public $connection;

    public function __construct($config,$collection=null) 
    {
        $this->config = $config;
        $this->collection = $collection;
    }
    
    public function connect(){
        $connecting_string =  sprintf('mongodb://%s:%s@%s:%d/%s',$this->config['mongodb']['username'], $this->config['mongodb']['password'], $this->config['mongodb']['host'], $this->config['mongodb']['port'], $this->config['mongodb']['dbname']);
        //$connecting_string =  sprintf('mongodb://%s:%d/%s', $this->config['mongodb']['host'], $this->config['mongodb']['port'], $this->config['mongodb']['dbname']);
        $this->connection = new \MongoDB\Client($connecting_string);
        //$this->connection->auth();
        if(!$this->connection){
            throw new Exception('No se ha podido realizar una conexión con la base de datos.');
        }
        if($this->collection){
            $collection = $this->connection->selectCollection($this->config['mongodb']['dbname'],$this->collection);
            if(!$collection){
                throw new Exception('No se ha encontrado la colección indicada.');
            }
            return $collection; 
        }
    }

    public function setCollection($collection){
        $collection = $this->connection->selectCollection($this->config['mongodb']['dbname'],$collection);
        if(!$collection){
            throw new Exception('No se ha encontrado la colección indicada.');
        }
        return $collection; 
    }

}