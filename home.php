<?php
include './servicos/verifica.php';
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <p><a href="servicos/sair."

        <p><a href="servicos/sair.php">sair</a>  </p>
        <p>seja bem vindo
            <?php
            $consulta = "SELECT * FROM `usuarios` WHERE loginUsuario='$login' AND senhaUsuario='$senha';";

            $consulta = mysqli_query($con, $consulta);

            while ($row = mysqli_fetch_array($consulta)) {
                echo $row['nomeUsuario'];
            }
            ?>


        </p>
        
        <ul>
            <li><a href="cadastroInterno.php">Cadastro</a></li>
            <li><a href="">edição</a></li>
            <li><a href="">exclusão</a></li>
        </ul>

           
            
      
>>>>>>> 6ccadcca45346fd427f029ce9d3e419d716a42c9
        primeira página do projeto.
    </body>
</html>
