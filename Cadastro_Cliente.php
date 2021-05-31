<?php

	include "lib/fw.php";

	$requestMethod = $_SERVER['REQUEST_METHOD'];
	if($requestMethod == 'POST')
	{
		// Vamos Salvar os Dados Aqui.
		header("Location: salvar-dados.php");
		die;
	}

	function pageTitle()
	{
		echo "Mine Horta Vale Verde";
	}

	function mainContent()
	{
		include 'Formulario-cadastro-cliente.php';
	}

	include "lib/main-template.php";

