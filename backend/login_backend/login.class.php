<?php
/*
 * Arquivo de classes para efetuar login
 * Script by Alisson D. Bovenzo
 * 1.0 : Desenvolvido conex�o ao bacno
 * 1.2 : Desenvolvimento de encerramento da conex�o
 * 2.0 : Redesenhado para orienta��o � objetos
 * 2.1 : implementada fun��o para query's
 */
// Classe para o bd
 class bd{
 	
 	public $host 	=	"127.0.0.1";
 	public $user 	=	"root";
 	public $pass 	=	"";
 	public $db		=	"hotel";
 	public $resource;
 	
	public function connect(){
		
	$this->resource = mysql_connect($this->host,$this->user,$this->pass);
	mysql_select_db($this->db,$this->resource);

	}
	public function close(){
		mysql_close($this->resource);
	}
	
	public function query($i){
		mysql_db_query($this->db,$i,$this->resource);
	}
};
