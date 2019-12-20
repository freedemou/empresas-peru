<?php

use Phalcon\Mvc\Model\Query;

class SistemaController extends ControllerBase
{

    public function indexAction(){

    }

    public function usuarioAction(){
    	$data = SysUsuarios::findFirst("idusuario = 1");
    	$data = $this->modelsManager->executeQuery('SELECT * FROM SysUsuarios')->toArray();
    }

}

