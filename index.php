<?php 
	
	require "src/Mobil/Mobil";
	require "src/Mobil/Honda";
	require "src/Mobil/Toyota";
	require "src/Calculator";

	$toyota = new Dummy\Mobil\Toyota("Toyota", 10);
	$calculator = new Dummy\Calculator($toyota);
	echo "Jarak dari mobil ".$toyota->getMerk()." adalah ".$calculator->hitungJarak()." km \n";

	$honda = new Dummy\Mobil\Honda("Honda", 20);
	$calculator = new Dummy\Calculator($honda);
	echo "Jarak dari mobil ".$honda->getMerk()." adalah ".$calculator->hitungJarak()." km \n";