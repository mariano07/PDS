<?php

	class Backlog{
			
	private $idbacklogpostit;
	private $usuario_alterou;
	private $data_modificacao;
	private $postitalterado;
	
	
	public function setIdbacklogpostit($idbacklogpostit){
		$this->idbacklogpostit = $idbacklogpostit;
		
		}
		
	public function getIdbacklogpostit(){
		return $this->idbacklogpostit;
		}
		
	public function setUsuario_alterou($usuario_alterou){
		$this->usuario_alterou = $usuario_alterou;
		
		}
		
	public function getUsuario_alterou(){
		return $this->usuario_alterou;
		
		}
		
	public function setData_modificacao($data_modificacao){
		$this->data_modificacao = $data_modificacao;
		
		}
	
	public function getData_modificacao(){
		return $this->data_modificacao;
	}
	
	public function setPostitalterado($postitalterado){
		$this->postitalterado = $postitalterado;
	}
	
	public function getPostitalterado(){
		return $this->postitalterado;
	}
	
	public function alterar(){
	//logica necessaria para alterar
	}
		
	public function salvar(){
   // lógica necessária para salvar
	}
	public function excluir(){
  // lógica necessária para excluir
	}
 
	public function selecionar(){
  // lógica necessária para selecionar
	}


	}
?>