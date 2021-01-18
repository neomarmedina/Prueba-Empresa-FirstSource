<?php

namespace App\Http\Controllers;

use App\Repositories\Posts;

use Illuminate\Http\Request;

//test
class PostsController extends Controller
{
    


	///Aqui inyectamos la clase  posts, la cual creara una instancia de la clase posts
	protected $posts;

	public function __construct(Posts $posts)
	{
		$this->posts = $posts;

	}


    public function index()
    {

    
		//El metodo all() que esta en la clase posts nos trarera todos los regitros de posts
		$posts = $this->posts->all();


		return view('posts.index', compact('posts'));

    }

    public function show($id)
    {
	
		//aqui llamo a metodo find de la clase post para traerme de otra api un registro especifico

		$post = $this->posts->find($id);

		//aqui le paso los valores de un posts a la vista

		return view('posts.show', compact('post'));
    }

    public function create()
    {
	
		//aqui llamo a metodo insert de la clase Post para registrar un nuevo posts 
		//tambien se guarda en post lo que retorna la api externa
		$post = $this->posts->insert();

		//add($post);

		//aqui le paso los valores que retorna la api externa al registrar un nuevo post
		//Y se lo paso a la vista

		return view('posts.create', compact('post'));
    }

    //con esta funcion llamo a la funcion update de la clase posts para actuañlizar un regitro y que me retorno la respuesta de la api externa 
    public function updateposts($id)
    {
	
		//aqui llamo a metodo update de la clase Post 
		$post = $this->posts->update($id);

		//add($post);

		//aqui le paso los valores que retorna la api externa al registrar un nuevo post
		//Y se lo paso a la vista

		return view('posts.update.update', compact('post'));
    }

    //con esta funcion llamo a la funcion delete de la clase posts para actuañlizar un regitro y que me retorno la respuesta de la api externa 
    public function deleteposts($id)
    {
	
		//aqui llamo a metodo delete de la clase Post 
		$post = $this->posts->delet($id);

		//add($post);

		//aqui le paso los valores que retorna la api externa al registrar un nuevo post
		//Y se lo paso a la vista

		return view('posts.delete.delete', compact('post'));
    }
}
