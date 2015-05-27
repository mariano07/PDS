<?php
class conexaoClass
	{
		var $conn;//propriedade
		
		//método
		function abrir_conexao()//abrir conexao com o banco de dados
			{
				$server = 'localhost';
				$usuario = 'root';
				$senha = '123456';
				$banco = 'pds_canvas';
				
				$this -> conn = mysql_connect ($server, $usuario, $senha);
				mysql_select_db ($banco, $this->conn);
			}
			
		function getconn()
			{
				return $this -> conn;
			}
	}


?>