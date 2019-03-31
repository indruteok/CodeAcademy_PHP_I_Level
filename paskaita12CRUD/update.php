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

        if (array_key_exists("turinys", $_POST) && array_key_exists("kategorija", $_POST) && array_key_exists("reitingas", $_POST)) {

            $crud->validateReitingas($_POST['reitingas']);
            $crud->update($_GET['id'], $_POST['turinys'], $_POST['kategorija'], $_POST['reitingas']);
        } else {
            echo "nepalikite tuščių reikšmių ";
        }
        ?>
        atnaujinta <a href="paskaita12.php"> grįžti atgal</a>

    </body>
</html>
