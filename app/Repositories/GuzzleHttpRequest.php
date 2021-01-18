<?php
//tests

namespace App\Repositories;

use GuzzleHttp\Client;//Esta clase me permite conectarme contras api, ojo esto es una librearia que debe instalarse por consola


class GuzzleHttpRequest
{
	
	//Vamos a crear un constructor para reusar la variable client

	protected $client;


	//Aqui en el constructor inyectamos la clase GuzzleHttp que definimos en los providers, AppServiceProvider.php
	public function __construct(Client $client)
	{
		//Aqui asigno al objeto $this->client el valor de la clase client que viene de providers, AppServiceProvider.php  para poder consumir el servicio de otra api

		$this->client = $client;
		    
	}


	//Este metodo me va a permitir hacer una petocion de tipo get, pasandole el url
	protected function get($url)
	{

		$response = $this->client->request('GET', $url);//https://jsonplaceholder.typicode.com/posts

		//Aqui retornamos los registros que se consumen de una api externa

		return json_decode( $response->getBody()->getContents() );

	}

	public function post($url)
	{
		$response = $this->client->request('POST', $url, [
    	'form_params' => [
        'title' => 'test title',
        'body' => 'test body',
        'userId' => 1
    	]]);
		
		return json_decode( $response->getBody()->getContents() );

	}

	//Aca actualizo un regsitro pasando datos de prueba y retorno la respuesta de la api externa
	public function put($url)
	{
		$response = $this->client->request('PUT', $url, [
    	'json' => [
        'id' => 5,
        'title' => 'titulo actualizado',
        'body' => 'el cuerpo del titulo se actualizo',
        'userId' => 2
    	]]);
		
		return json_decode( $response->getBody()->getContents() );

	}

	//Aca elimino un regsitro pasando datos de prueba y retorno la respuesta de la api externa
	public function delete($url)
	{

		$response = $this->client->request('DELETE', $url);//https://jsonplaceholder.typicode.com/posts

		return json_decode( $response->getBody()->getContents() );

	}

	
}