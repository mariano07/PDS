<?php

	class Blocos_usuarios{
			
	private $blocos_idblocos;
	private $usuarios_idusuarios;
	
	
	
	public function setblocos_idblocos($blocos_idblocos){
		$this->blocos_idblocos = $blocos_idblocos;
		}
		
	public function getblocos_idblocos(){
		return $this->blocos_idblocos;
		}
		
	public function setusuarios_idusuarios($usuarios_idusuarios){
		$this->usuarios_idusuarios = $usuarios_idusuarios;
		}
		
	public function getusuarios_idusuarios(){
		return $this->usuarios_idusuarios;
		}
		
	public function selecionar(){
  	// lógica necessária para selecionar
	}


	}
?>