<?php
	require_once 'Usuario.php';
	
		class UsuarioNerd extends Usuario{
		
			private $jogos;
			private $livros;
			
			
		public function __construct(){
			parent::__construct();
		
		}
		public function getJogos(){
			return $this->$jogos;
		}
		public function setJogos($_jogos){
			$this->senha=$_jogos;
		}
		public function getLivros(){
			return $this->$livros;
		}
		public function setLivro($_livros){
			$this->nome=$_livros;
		}
		public function login($nome,$senha){
		if($this->nome==$nome){
			if($this->senha==$senha){
				return "logado com sucesso";
				}
				
		

		}
			return "erro ao logar"; 
		}
		
		}
