<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Prueba FirstSource.</title>
    </head> 
    
    <body>

    	<div class="container">
    	
	    	<link rel="stylesheet" href="css/app.css">

	    	<h1>Prueba Empresa FirtsSource</h1>
	    	<h3>Posts  	

	    		
	    		<a href="/create">
	    			<button class="btn btn-suscces">Agregar</button>
	    		</a>	
	    	</h3>
	    	@foreach ($posts as $post)

		    <div class="panel panel-default">


		    		<div class="panel-body">

		    		<a href="/posts/{{ $post->id }}">	
					
						{{$post->title}}		    
					</a>				
					<br>
					<td>
						<a href="/posts/{{ $post->id }}">
						<button class="btn btn-success">Ver</button>
						</a>
						<a href="/update/{{ $post->id }}">
						<button class="btn btn-info">Editar</button></a>
		    			</a>
		    			<a href="/delete/{{ $post->id }}">
						<button class="btn btn-danger">Eliminar</button>
						</a>
		    		</td>
		    			
		    		</div>	
		    </div>
	    	@endforeach
	   	</div>	

    </body>


</html>       
