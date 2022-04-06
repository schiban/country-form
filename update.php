<center>
<?php

// Inclui a conexão à base de dados
include 'connection.php';

// Atribuição dos valores às variáveis respetivas
$id             = $_GET['id'];
$nomepais       = $_POST['nomepais'];
$moedapais      = $_POST['moedapais'];
$populacaopais  = $_POST['populacaopais'];

// Query que faz um update aos dados do id escolhido pelo o utilizador
$sql = "UPDATE paises 
        SET nomepais = '$nomepais', moedapais='$moedapais', populacaopais='$populacaopais' 
        WHERE id = '$id';";

// Condição caso a inserção tenha sido concretizada
if ($bd->query($sql)) {
    echo "Dados editados com sucesso!<br><br>
        <a href='index.php'>Voltar</a>";
}

?>
</center>