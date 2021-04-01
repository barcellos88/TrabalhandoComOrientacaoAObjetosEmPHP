<?php

    function validarUsuario(array $usuario)
    {
        if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
        {
            throw new exception("Campos obrigatórios não foram preenchidos!\n");
        }
        return true;
    }

$usuario = [
    'codigo' => 1,
    'nome'   => 'Barcellos',
    'idade'  => 57,
];

$status = false;

try
{
    $status = validarUsuario($usuario);
}
catch(exception $e)
{
    echo $e -> getMessage();
}
finally
{
    echo "<br>";
    echo "Status da Operação: " . (int)$status; //cast
    die();
}

echo "<br>";
echo "... executando ...";
    
    
?>