
<?php
    include 'conexao.php';
    $sql = 'select * from crianca';
    $con = Conexao::conectar();
    $listCrianca = $con->query($sql);
?>
<html>

<head>
    <title>Início - Gestão Casa da Criança</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php 
            foreach($listCrianca as $crianca){
                echo '<tr>
                        <td>'. $crianca['id'] .'</td>
                        <td>'. $crianca['nome'] .'</td>
                    </tr>';
            }
        ?>
    </table>
</body>
</html>

