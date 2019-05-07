<?php 

/**
 * 
 */
class Conexion{
	
	public function conectar(){
	//	$link = new PDO("mysql:host=localhost;dbname=veterinariaavierm", "root", "");
	
	$link = new PDO("pgsql:
	host=ec2-50-17-246-114.compute-1.amazonaws.com;
	port=5432;
	dbname=dacahko0bmgd16;
	user=sezgfzxgggvslu;
	password=95eb2cb2602628f46979de21b4a2be446f46c25edc511997ece477a3e4b9a0cd");
		return $link;
	}
}