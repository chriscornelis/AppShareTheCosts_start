<?php

?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>ShareTheCosts</title>
		<meta name="description" content="" />
		<meta name="author" content="Chris Cornelis" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		
	</head>

	<body>
		<div data-role="page">


	<div data-role="content">
		<h2>Registreer</h2>
		
		<input type="text" name="name" id="name_register" placeholder="gebruikersnaam" value="">
		<input type="email" name="mail" id="mail_register" placeholder="e-mail" value="">
		<input type="password" name="password" id="password_register" placeholder="paswoord" value="" autocomplete="off">
		
		<a href="#" data-role="button" id="register">Registreren</a>
	</div><!--content-->
	
		</div>
	</body>
</html>