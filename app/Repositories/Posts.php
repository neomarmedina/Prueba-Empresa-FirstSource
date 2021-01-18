<?php

namespace App\Repositories;
//test

//Aqui extreaemos este metodo a una clase dedicada a trabajar con GuzzleHttp y lo hacemos extends

class Posts extends GuzzleHttpRequest
{


	//Este metodo lo uso para traer todos los registros de los posts de una api externa
	public function all()
	{
 

		//Aqui llamamos al metodo get y le pasamo la palabra posts para que se la agregue a la url y consumir un servicio donde me traigas todos los registros d ela tabla posts
		return $this->get('posts');

		
	}

	//Este metodo me permite consumir los servicios de una api para traerme un registro en especifico
	public function find($id)
	{

		//Aqui llamamos al metodo get y le pasamo la palabra posts para que se la agregue a la url y consumir un servicio donde me traigas un regsitro en especifico de la tabla posts
		return $this->get("posts/{$id}");

	}

	//Este metodo me permite consumir los servicios de una api para registrar un posts
	public function insert()
	{

		//Aqui llamamos al metodo post y le pasamoS la palabra posts para que se la agregue a la url y consumir un servicio donde se registre un nuevo posts usando POST
		return $this->post("posts");

	}	

	//Este metodo me permite consumir los servicios de una api para actualizar un posts
	public function update($id)
	{

		//Aqui llamamos al metodo put de la clase Posts y le pasamos la palabra posts para que se la agregue a la url y consumir un servicio donde se actualize un nuevo posts usando PUT
		return $this->put("posts/{$id}");

	}

	//Este metodo me permite consumir los servicios de una api para eliminar un posts
	public function delet($id)
	{

		//Aqui llamamos al metodo put de la clase Posts y le pasamos la palabra posts para que se la agregue a la url y consumir un servicio donde se actualize un nuevo posts usando PUT
		return $this->delete("posts/{$id}");

	}


}

/*Documentacion de lo que se hizo :

	1)Se crearon las rutas que nos redirecciona al controladoR PostsController y este a las distintas vistas

	2)Se creo el controlador PostsController, que se encarga de obtener los post y para ellos los metodos 	
		index()
		show()

	3)Tambien se creo la Post la cual se encarga de definir las rutas para obtener los posts, usando sus metodos internos all() y find() que usa el metodo get que se hereda de la clase GuzzleHttpRequest donde se interactua direcamente con la libreria GuzzleHttp

	4) Se creo la clase GuzzleHttpRequest que es la encargada de interactuar con la libreria GuzzleHttp para consumir (conectarse) con otras apis (Backend).

		En esta clase se crea un constructor dond ese inyecta el cliente de GuzzleHttp, laravel busca en su contenedor si tiene una llave con eñl nombre de GuzzleHttp\Client y va a la clase AppServiceProvider.php y nos va a devolver lo siguiente :


		$this->app->singleton('GuzzleHttp\Client', function(){

            return new Client([
                
                'base_uri' => 'https://jsonplaceholder.typicode.com/',
                 
            ]);
        });

		o sea la conexion con la api correspondiente a la url que le pasamos


	5)Tambien se creo en la clase AppServiceProvider.php el metodo register() que contiene la conexion usando GuzzleHttp explicada en el paso anterior, esto con la idea de tener bien estructurado nuestra aplicacion 

||	6)Por ultimo se crearon todas las vistas necesarias para mostrar la informacion retornada por la api externa de prueba
*/

