<?php

	class clsUsuarios
	{
		
		private $login;
		private $senha;
		private $qtd_usuario;
		private $email;
		
		
		public function setLogin($login){
			$this->login = $login;
		
		}
		
		public function getLogin(){
			return $this->login;
		}
		
		public function setSenha($senha){
			$this->senha = $senha;
		
		}
		
		public function getSenha(){
			return $this->senha;
		}
		
		public function setQtd_usuarios($qtd_usuarios){
			$this->qtd_usuario = $qtd_usuarios;
		
		}
		
		public function getQtd_usuarios(){
			return $this->qtd_usuario;
		}
		
		public function alterar(){
		//logica necessaia para salvar
		}
		
		public function salvar(){
   		 
		}
		public function excluir(){
  		// lógica necessária para excluir
		}
 
		public function selecionar(){
  		// lógica necessária para selecionar
		}
			
	
	}
	
	
	


?>