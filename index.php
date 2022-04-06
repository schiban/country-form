<center>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>NOME</th>
            <th>MOEDA</th>
            <th>POPULAÇÃO</th>   
            <th>OPÇÕES</th>           
        </tr>
    </thead>
    <tbody>
        <?php 

        // Inclui a conexão à base de dados
        include "connection.php";

        // Query que seleciona todos os registos
        $sql = "SELECT * FROM paises";
        
        // Condição que verifica se existem registos. Se sim, apresenta um tabela com os resultados
        if (count(array($sql)) > 0) {
            foreach ($bd->query($sql) as $registo)
            {
                ?>
                <tr>
                    <th><?php echo $registo['id']; ?></th>
                    <td><?php echo $registo['nomepais']; ?></td>
                    <td><?php echo $registo['moedapais']; ?></td>
                    <td><?php echo $registo['populacaopais']; ?></td>                    
                    <td class="options">
                        <a href="edit.php?id=<?php echo $registo['id'];?>">Editar</a>
                        <a href="delete.php?id=<?php echo $registo['id'];?>">Eliminar</a>
                    </td>
                </tr>
        <?php
            }

        // Caso não existam registos
        } else {
            echo "Não existem registos!";
        }
        ?>
    </tbody>

    <!-- Opção para inserir novos dados à base de dados -->
    <a href="new.php">Inserir Dados</a>  

    <!-- Autor -->
    <p>João Bandeira &copy a22001233</p>
</table>

<style>

    /* Hiperligação */
    a {        
        color: brown;
    }

    a:hover {
        color: #E9967A;
    }

    /* Tabela, Cabeçalho e Conteúdo */
    table, th, td {
        border: 1px solid grey;   
    }

    table {
        background-color: #FFFAF0;
    }

    th {
        padding: 5px;
        background-color: #DEB887;
    }

    td {
        padding: 5px;
        background-color: #FFF8DC; 
    }

    td:hover {
        background-color: #F8F8FF;
    }

</style>