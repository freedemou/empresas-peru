<?php

class ClienteCollection {
    protected $collection;
    protected $serviceManager;
    public function __construct($collection) {
        $this->collection = $collection;
    }
    public function obtenerClientes(){
        return $this->collection->find([],['limit' => 40, 'skip'=>0])->toArray();
    }
}