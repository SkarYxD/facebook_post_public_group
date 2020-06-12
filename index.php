<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/style/style.csss">
	<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/all.css">
	<title>Facebook API # Publicar en un grupo</title>
</head>
<body>
	<div class="jumbotron">
		<div class="container"><center>
			<?php

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);

			session_start();
			require 'Facebook/config.php';
			define('FACEBOOK_SDK_V5_SRC_DIR',__DIR__ .'/Facebook/');
			require_once __DIR__ .'/Facebook/autoload.php';

			// Create our Application instance (replace this with your appId and secret).
			$facebook = new Facebook\Facebook(array(
			  'app_id'  => $config['App_ID'],
			  'app_secret' => $config['App_Secret'],
			    'default_graph_version' => 'v2.10'
			));

			$helper = $facebook->getRedirectLoginHelper();
			$permissions = ['email', 'user_likes','publish_to_groups']; // optional
			$loginUrl = $helper->getLoginUrl('http://localhost/post.php', $permissions);

			echo '<a class="btn btn-dark btn-lg" href="' . $loginUrl . '" role="button">Publicar en el grupo</a>';

			?>
			</center>

			<script src="lib/lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
		</div>

	</div>
	<div class="container">
		<ul class="list-unstyled">
		  <li class="media">
		    <i class="mr-3 fab fa-github-square fa-6x fa-lg"></i> <!-- uses solid style -->
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">GitHub</h5>
		      Proyecto creado y subido a github por JkDev <a target="_blank" href="https://github.com/SkarYxD/facebook_post_public_group">Ir</a> usando la herramienta Facebook API
		    </div>
		  </li>
		  <li class="media my-4">
		   <i class="mr-3 fab fa-facebook-square fa-6x fa-lg"></i>
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Facebook API</h5>
		      Una biblioteca actual y nativa para acceder a la API Graph y aprovechar las ventajas del inicio de sesión con Facebook <a target="_blank" href="https://github.com/facebookarchive/php-graph-sdk/tree/master/docs">Facebook PHP SDK</a>.
		    </div>
		  </li>
		  <li class="media">
		    <i class="mr-3 fab fas fa-check-square fa-6x fa-lg"></i>
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Instruccíones</h5>
		      
		      Ir al archivo <a href="post.php">post.php</a> & editar las siguientes lineas:
		      <p>
		      <code>
		      	23 'link' => 'http://www.google.com', // Enlace de la publicación, puede ser una imagen<br/> 
				24 'message' => 'Google.com', // Mensaje que se publicara
		      </code>
		      <p>
		      En el archivo <a href="config.php">config.php</a> editar las siguientes lineas:
		  	  <br />
		      <code>
				5 $config['App_ID']      =   'APP_ID'; //AQUI TU ID DE APP <br />
				6 $config['App_Secret']  =  'APP_SECRET' //AQUI TU SECRET DE APP; 
		      </code>
		      <p>
		      Archivo <a href="#">index.php</a> editar las siguientes lineas:
		      <br />
		      <code>
		      	31 $permissions = ['email', 'user_likes','publish_to_groups']; // Permisos para publicar<br />
		      	32 $loginUrl = $helper->getLoginUrl('http://localhost/post.php', $permissions); // Escribir la dirección de donde se encuentre el archivo post.php
		      </code>
		      <p>
		      Facebook Doc: <a target="_blank" href="https://developers.facebook.com/docs/apps/?translation">Ir</a>

		      <br>Crear APP: <a href="https://developers.facebook.com/apps/">Ir</a>
		  	</p>
		    </div>
		  </li>
		</ul>
	</div>
</body>
</html>