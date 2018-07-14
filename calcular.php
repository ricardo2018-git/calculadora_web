<?php

	require_once 'classes/Calculadora.php';
	
	$num1     = $_POST['num1'];
	$num2     = $_POST['num2'];
	$operacao = $_POST['operacao'];
	
	$calculadora = new Calculadora();
	
	//Seta valores
	
		$calculadora -> setNum1($num1);
		$calculadora -> setNum2($num2);
		
	// -----FIM -----
	
	//Operação escolhida
	
		switch($operacao){
			case 'somar':
				$calculadora -> somar();
				break;
				
			case 'subtrair':
				$calculadora -> subtrair();
				break;
				
			case 'multiplicar':
				$calculadora -> multiplicar();
				break;
				
			case 'dividir':
				$calculadora -> dividir();
				break;
		}
		
	// -----FIM -----
	echo $calculadora -> getTotal();
	
?>