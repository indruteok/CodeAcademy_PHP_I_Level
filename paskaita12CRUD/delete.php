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
        include 'config.php';

       $crud->delete($_GET['id']);
        ?>
        ištrynėm, ačiū, <a href="paskaita12.php"> grįžti atgal</a>
    </body>
</html>
