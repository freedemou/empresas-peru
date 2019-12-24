<?php

class IndexController extends ControllerBase
{

    public function indexAction(){
    	$data_usuario = $this->modelsManager->executeQuery('SELECT * FROM SysUsuarios')->toArray();
    	$data = [
    		'data_usuario'=> $data_usuario
    	];
        $dataClientes = $this->graphql->obtenerClientes();
        print_r($dataClientes);
        die;
    	$this->view->setVars($data);
    }

    public function empresasAction(){
        
    }

    public function integracionAction(){
    	
    }

    public function apiAction(){
    	
    }

    public function planesAction(){
    	
    }

    public function contactoAction(){
    	
    }

}

