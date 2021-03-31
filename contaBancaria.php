<?php

    class contaBancaria
    {
    //modificadores de acesso (public - private - protected)
        private $banco;
        private $nomeTitular;
        private $nomeAgencia;
        private $numeroConta;
        private $saldo;

        public function __construct($banco, $nomeTitular, $nomeAgencia, $numeroConta, $saldo)
        {
            $this->banco        = $banco;
            $this->nomeTitular  = $nomeTitular;
            $this->nomeAgencia  = $nomeAgencia;
            $this->numeroConta  = $numeroConta;
            $this->saldo        = $saldo;
        }

        public function obterSaldo()
        {
            return 'Olá, eu sou o metodo obterSaldo()';
        }


    }

    $conta = new contaBancaria(
        'Banco do Brasil',//banco
        'Leonardo Barcellos',//nomeTitular
        '8244',//nomeAgencia
        '573854-10',//numeroConta
        '300.00'//saldo
    );

    var_dump($conta);

?>