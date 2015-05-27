<?php

	class Postit{
			
	private $idpostit;
	private $usuarios_idusuarios;
	private $descricao_postit;
	private $prioridade_postit;
	private $data_inicio;
	private $data_limite;
	private $backlog_postit;
	private $tarefa_postit;
	
	public function setIDpostit($idpostit){
		$this->idpostit = $idpostit;
		}
		
	public function getIDpostit(){
		return $this->idpostit;
		}
		
	public function setusuarios_idusuarios($usuarios_idusuarios){
		$this->usuarios_idusuarios = $usuarios_idusuarios;
		}
		
	public function getusuarios_idusuarios(){
		return $this->usuarios_idusuarios;
		}
		
	public function setdescricao_postit($descricao_postit){
		$this->descricao_postit = $descricao_postit;
		}
		
	public function getdescricao_postit(){
		return $this->descricao_postit;
		}
		
	public function setdata_inicio($data_inicio){
		$this->data_inicio = $data_inicio;
		}
		
	public function getdata_inicio(){
		return $this->data_inicio;
		}
		
	public function setdata_limite($data_limite){
		$this->data_limite = $data_limite;
		}
		
	public function getdata_limite(){
		return $this->data_limite;
		}
		
	public function setbacklog_postit($backlog_postit){
		$this->backlog_postit= $backlog_postit;
		}
		
	public function getbacklog_postit(){
		return $this->backlog_postit;
		}
		
	public function settarefa_postit($tarefa_postit){
		$this->tarefa_postit = $tarefa_postit;
		}
		
	public function gettarefa_postit(){
		return $this->tarefa_postit;
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