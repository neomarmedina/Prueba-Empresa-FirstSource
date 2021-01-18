<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/app.css">

        <title>Prueba FirtsSource</title>
    </head> 
    
    <body>

    	<div class="container">
    	
	    	<h1>Se ha creado un nuevo Posts con datos de pruebas</h1>


		    	<div class="panel panel-default">

		    		<div class="panel-heading">

		    			<h4>Id del Posts :</h4>

		    			<h4>{{ $post->id }}</h4>
		    				<br>

		    		</div>

		    		<div class="panel-heading">


		    				<h4>Body del Posts :</h4>
		    				{{ $post->body }}
		    				<br>
		

		    		</div>
		    		<div class="panel-heading">


		    				<h4>Id del usuario asociado :</h4>
		    				{{ $post->userId }}
		    				<br>

		    				<a href="/">Regresar</a>			

		    		</div>	

		    	</div>
	    </div>	

    </body>


</html>       
