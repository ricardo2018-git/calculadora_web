<?php

	require_once 'classe/calculadora.php';
	
	$num1     = $_POST['num1'];
	$num2     = $_POST['num2'];
	$operacao = $_POST['operacao'];
	
	$calculadora = new Calculadora();
	
	//Setar valores
	$calculadora -> setNum1($num1);
	$calculadora -> setNum2($num2);

?>