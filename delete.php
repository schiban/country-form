<center>
<?php

// Inclui a conexão à base de dados
include 'connection.php';

// Recebe o 'id' passado na URL
$id = $_GET['id'];

// Query que seleciona o 'id'
$sql = "SELECT *FROM paises WHERE id = '$id'";

// Verificação na base de dados se o 'id' existe e resultado passado para a variável $registo
$registo = $bd->query($sql)->fetch(PDO::FETCH_BOTH);

// Condição caso o 'id' exista, então é executada a query para eliminar o registo
if (!$registo==null) {
    
    // Query que elimina o 'id' escolhido pelo utilizador
    $sql = "DELETE FROM paises WHERE id='$id'";

    // Atribuição da query na base de dados e mensagem de sucesso
    $resultado = $bd->query($sql);
    echo "Dados eliminados com sucesso!<br><br><a href='./index.php'>Voltar</a>";

// Caso o 'id' não exista, resulta em erro    
} else {
    echo "ERRO 404!<br>
        O ID $id não existe.<br><br>
        <a href='index.php'>Voltar</a>";   
}

?>
</center>