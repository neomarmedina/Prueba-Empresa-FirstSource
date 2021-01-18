<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/app.css">

        <title>Prueba FirtsSource</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head> 
    
    <body>

    	<div class="container">
    	
	    	<h1>Se ha actualizado el Posts seleccionado con datos de pruebas</h1>


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


		    				<h4>Id del usuario asociado.......... :</h4>
		    				{{ $post->userId }}
		    				<br>

		    				<a href="/">Regresar.</a>			

		    		</div>	

		    	</div>
	    </div>	


    </body>


</html>       
