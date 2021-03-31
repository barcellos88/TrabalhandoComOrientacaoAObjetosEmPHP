<?php

    class contaBancaria
    {
    //modificadores de acesso (public - private - protected)
        private $banco;
        private $nomeTitular;
        private $nomeAgencia;
        private $numeroConta;
        private $saldo;

//Criação construtor
        public function __construct($banco, $nomeTitular, $nomeAgencia, $numeroConta, $saldo)
        {
            $this -> banco        = $banco;
            $this -> nomeTitular  = $nomeTitular;
            $this -> nomeAgencia  = $nomeAgencia;
            $this -> numeroConta  = $numeroConta;
            $this -> saldo        = $saldo;
        }

//Criação dos Métodos
        public function obterSaldo()
        {
            return 'Seu saldo atual é: R$'.$this->saldo;
        }

        public function depositar($valor)
        {
            $this -> saldo += $valor;
            return 'Deposito de R$'.$valor.' realizado com sucesso';
        }

        public function sacar($valor)
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
        0//saldo
    );
    var_dump($conta);
    $conta2 = new contaBancaria(
        'Caixa Economica',//banco
        'Joana Silva',//nomeTitular
        '1762',//nomeAgencia
        '53678-07',//numeroConta
        100.00//saldo
    );
    var_dump($conta2);


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