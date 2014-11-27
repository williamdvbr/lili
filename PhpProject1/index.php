<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Conta.php';
            require_once 'UsuarioNerd.php';
            require_once 'Sistema.php';
           
            require_once 'UsuarioAdmin.php';
            $conta = new Conta(10,"Fulano", 1000);
            echo $conta->sacar(10);
                echo"<br/>";

            $u1=new UsuarioNerd("João");
            $u2=new UsuarioAdmin("Fulano");
            $sistema=new Sistema();
            $sistema= new Sistema();
            echo$sistema->principal($u1, "João", 123);
                echo"<br/>";
            echo$sistema->principal($u2, "Fulano", 123);

          ?>
    </body>
</html>
