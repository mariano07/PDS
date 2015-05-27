<?php

	class Blocos{
			
	private $idblocos;
	private $projeto_idprojeto;
	private $nome_blocos;
	private $usuario_porbloco;
	private $relatorio_bloco;
	private $qtd_postit;
	
	
	public function setIDblocos($idblocos){
		$this->idblocos = $idblocos;
		}
		
	public function getIdblocos(){
		return $this->idblocos;
		}
		
	public function setprojeto_idprojeto($projeto_idprojeto){
		$this->projeto_idprojeto = $projeto_idprojeto;
		}
		
	public function getprojeto_idprojeto(){
		return $this->projeto_idprojeto;
		}
		
	public function setnome_bloco($nome_blocos){
		$this->nome_blocos = $nome_blocos;
		}
		
	public function getnome_bloco(){
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
?>