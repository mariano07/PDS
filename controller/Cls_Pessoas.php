<?php

	class Pessoas{
			
	private $idpessoas;
	private $usuarios_idusuarios;
	private $nome;
	private $endereco;
	private $CPF;
	private $CNPJ;
	
	
	public function setIDpessoas($idpessoas){
		$this->idpessoas = $idblocos;
		}
		
	public function getIdpessoas(){
		return $this->idpessoas;
		}
		
	public function setusuarios_idusuarios($usuarios_idusuarios){
		$this->usuarios_idusuarios = $usuarios_idusuarios;
		}
		
	public function getusuarios_idusuarios(){
		return $this->usuarios_idusuarios;
		}
		
	public function setnome($nome){
		$this->nome = $nome;
		}
		
	public function getendereco(){
		return $this->nome_blocos;
		}
		
	public function setusuarios_porbloco($usuario_porbloco){
		$this->usuario_porbloco = $usuario_porbloco;
		}
		
	public function getusuarios_porbloco(){
		return $this->usuarios_porbloco;
		}
		
	public function setrelatorio_bloco($relatorio_bloco){
		$this->relatorio_bloco = $relatorio_bloco;
		}
		
	public function getrelatorio_bloco(){
		return $this->relatorio_bloco;
		}
		
	public function setqtd_postit($qtd_postit){
		$this->qtd_postit = $qtd_postit;
		}
		
	public function getqtd_postit(){
		return $this->qtd_postit;
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