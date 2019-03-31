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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="mt-5 text-center bg-light">
        <?php
        include 'config.php';

        if (array_key_exists("username", $_POST) && array_key_exists("password", $_POST)) {
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);

            if (!empty(trim($username)) && !empty(trim($password))) {

                $username = addslashes($_POST['username']);
                $password = addslashes($_POST['password']);

                $query = mysqli_query($connection, "INSERT INTO `prisijungimas` SET `username` = '" . $username . "', "
                        . "`password`='" . $password . "' ");

                echo "      <h2> Sveikiname , </h2> ";
                echo "<div class='alert alert-success' role='alert'> prisiregistravote </div>";

                echo " <a href='prisijungimas.php'><button class='mt-2 btn btn-success' type='button'>Prisijungti</button></a> ";
            } else {
                echo "<div class='alert alert-danger' role='alert'>  nepalikite tuščių reikšmių </div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>  nepalikite tuščių reikšmių </div>";
            echo "<div class='btn text-light btn-primary'>  <a href='registracija.php'> Taisyti</a> </div>";
        }
        ?>
    </body>
</html>
