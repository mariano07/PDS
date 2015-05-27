<?php

	class Projeto{
				
	private $idprojeto;
	private $nome_projeto;
	private $autor_projeto;
	private $data_projeto;
	private $equipe_projeto;
	private $qtd_projeto;

	
	public function setidprojeto($idprojeto){
		$this->idprojeto = $idprojeto;
		}
		
	public function getidprojeto(){
		return $this->idprojeto;
		}
		
	public function setnome_projeto($nome_projeto){
		$this->nome_projeto = $nome_projeto;
		}
		
	public function getnome_projeto(){
		return $this->nome_projeto;
		}
		
	public function setautor_projeto($autor_projeto){
		$this->autor_projeto = $autor_projeto;
		}
		
	public function getautor_projeto(){
		return $this->autor_projeto;
		}
		
	public function setdata_projeto($data_projeto){
		$this->data_projeto = $data_projeto;
		}
		
	public function getdata_projeto(){
		return $this->data_projeto;
		}
		
	public function setequipe_projeto($equipe_projeto){
		$this->equipe_projeto = $equipe_projeto;
		}
		
	public function getequipe_projeto(){
		return $this->equipe_projeto;
		}
		
	public function setqtd_projeto($qtd_projeto){
		$this->qtd_projeto= $qtd_projeto;
		}
		
	public function getqtd_projeto(){
		return $this->qtd_projeto;
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