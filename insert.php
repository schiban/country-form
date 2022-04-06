<center>
<?php

// Inclui a conexão à base de dados
include 'connection.php';

// Condição inciada quando o utilizador pressiona no "Submeter"
if(isset($_POST['submit']))
{    
    $nomepais       = $_POST['nomepais'];
    $moedapais      = $_POST['moedapais'];
    $populacaopais  = $_POST['populacaopais'];

    // Query que faz com que sejam inseridos novos dados à base de dados
    $sql = "INSERT INTO paises (nomepais,moedapais,populacaopais)
            VALUES ('$nomepais','$moedapais','$populacaopais')";

   // Condição caso a inserção tenha sido concretizada   
    if ($bd->query($sql)) {
        echo "Dados inseridos com sucesso!<br><br>
            <a href='index.php'>Voltar</a>";
    }
}
?>
</center>