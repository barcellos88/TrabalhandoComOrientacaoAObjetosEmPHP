<?php

    declare(strict_types=1);//faz a checagem de tipo das variaveis

    class contaBancaria
    {
    //modificadores de acesso (public - private - protected)
    //declaração de tipos de classe
        /**
         * @var string
            */
        private  string $banco;

        /**
         * @var string
         */
        private $nomeTitular;

        /**
         * @var string
         */
        private $nomeAgencia;

        /**
         * @var string
         */
        private $numeroConta;

        /**
         * @var float
         */
        private $saldo;

//Criação construtor
        public function __construct
        (
            string $banco, 
            string $nomeTitular, 
            string $nomeAgencia, 
            string $numeroConta, 
            float $saldo
        )
        {
            $this -> banco        = $banco;
            $this -> nomeTitular  = $nomeTitular;
            $this -> nomeAgencia  = $nomeAgencia;
            $this -> numeroConta  = $numeroConta;
            $this -> saldo        = $saldo;
        }

//Criação dos Métodos
        public function obterSaldo() : string
        {
            return 'Seu saldo atual é: R$'.$this->saldo;
        }

        public function depositar(float $valor) : string
        {
            $this -> saldo += $valor;
            return 'Deposito de R$'.$valor.' realizado com sucesso';
        }

        public function sacar(float $valor) : string
        {
            $this -> saldo -= $valor; 
            return 'Saque de R$'.$valor.' realizado com sucesso';
        }

    }

//criação do Objeto
    $conta = new contaBancaria(
        'Banco do Brasil',//banco
        'Leonardo Barcellos',//nomeTitular
        '8244',//nomeAgencia
        '573854-10',//numeroConta
        100.00//saldo
    );
    var_dump($conta);

   /*echo $conta -> obterSaldo();
    echo "<br>";
    echo $conta -> depositar(300);
    echo "<br>";
    echo $conta -> obterSaldo();
    echo "<br>";
    echo $conta -> sacar(150.00);
    echo "<br>";
    echo $conta -> obterSaldo();
*/
?>