<center>
<?php

// Inclui a conexão à base de dados
include 'connection.php';

// Recebe o 'id' passado na URL
$id = $_GET['id'];

// Query que seleciona o utilizar a ser alterado
$sql = "SELECT * 
        FROM paises 
        WHERE id = '$id'";

// Atribuição do resultado da query
$resultado = $bd->query($sql);
$registo = $resultado->fetch(PDO::FETCH_BOTH);

// Verificação se o $registo tem ou não conteúdo
if (!$registo == null) {
    ?>
    <table>
        <form action="update.php?id=<?php echo $registo['id']; ?>" method="POST">
            <tr>
                <th><label>País: </label></th>
                <td><input type="text" name="nomepais" value="<?php echo $registo['nomepais']; ?>" required/></td>
            </tr> 
            <tr>
                <th><label>Moeda: </label></th>
                <td><input type="text" name="moedapais" value="<?php echo $registo['moedapais']; ?>" required/></td>
            </tr> 
            <tr>
                <th><label>População: </label></th>
                <td><input type="text" name="populacaopais" value="<?php echo $registo['populacaopais']; ?>" required/></td>
                
                <td><input type="submit" name="submit" value="Submeter"/></td>
            </tr>            
        </form>
    </table>
<?php

// Condição que mostra erro caso a condição anterior falhe (exemplo, se o utilizador alterar para um id inexistente na URL)
} else {
    echo "ERRO 404!<br>
        Por favor indique um 'id' válido.<br><br>
        <a href='index.php'>Voltar</a>";    
}
?>
</center>
