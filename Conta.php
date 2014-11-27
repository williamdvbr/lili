<?php
	class Conta{
		private $nome;
		private $cpf;
		private $numero;
		private $saldo=1000;
		private $valor=200;
		private $valor2=500
			function sacar($valor,$valor2,$saldo){
			
				if ($valor <=$saldo){
					$valor_desejado = $saldo - $valor;
				return valor_desejado;
				}
				

			
			}
			public function depositar($valor,$valor2,$saldo){
				if($valor2>=$saldo){
			$deposito=$saldo+$valor;
			return $deposito;
			}
			}

			public setNome($_nome){
			$this->$nome=$_nome;

			}
			public setCpf($_cpf){
			$this->$cpf=$_cpf;
			}
			}
			public setNumero($_numero){
			$this->$numero=$_numero;
			}
			public setSaldo($_saldo){
			$this->$saldo=$_saldo;
			}
			public getNome(){
			return $this-> $nome;
			}
			public getCpf(){
			return $this->$cpf;

			}
			public getNumero(){
			return $this->$numero;

			}
			public getSaldo(){
			return $this-> = $saldo;

			}
			}
			?>