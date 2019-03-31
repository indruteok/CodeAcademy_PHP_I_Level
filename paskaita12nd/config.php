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

        function connect() {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "crud";
            $conn = mysqli_connect($host, $user, $pass, $db);
            mysqli_set_charset($conn, "utf8"); 
            return $conn;
        }

        $connection = connect();
        ?>
    </body>
</html>
