<?php
	abstract class Usuario{
		protected $nome;
		protected $senha;
		
		
		abstract public function login($nome,$senha);
		
		
		public function getNome(){
			return $this->nome;
		}
		public function setSenha($_senha){
			$this->senha=$_senha;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function setNome($_nome){
			$this->nome=$_nome;
		}
		
		public static $NRO_USUARIOS_ONLINE=0;

		 public function __construct(){
		 
			Usuario::$NRO_USUARIOS_ONLINE+=1;
		}
		public function imprime_Online(){
		
		
		}
	
}
?>