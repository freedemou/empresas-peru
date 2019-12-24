<?php

use Phalcon\Di;
use Softonic\GraphQL\ClientBuilder as GraphQL;

class GraphQLClient {

	protected $url_api;

	public function __construct(){
		$config = Di::getDefault()->get('config');
		$this->url_api = $config->api->url;
	}

	public function obtenerClientes(){
		$client = GraphQL::build($this->url_api);
        $query = <<<'QUERY'
        {
          data: getClientes(cantidad: 4){
            _id
            ruc
            razonsocial
            tipoempresa
            actividades_economicas{
              cui
              actividad
            }
          }
        }
        QUERY;
        $variables = [];
        $response = [];
        try {
        	$response = $client->query($query, $variables);
        	$response = $response->getData()['data'];
        } catch (Exception $e) {
        	$response = [
        		'result'=> 'error',
        		'message'=> $e->getMessage()
        	];
        }
        return $response;
	}

}