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
    <body class=" mt-5 text-center bg-light container">
        <?php
        session_start();
        if (isset($_COOKIE['wrong']) && $_COOKIE['wrong'] == 'wrong') {
            echo "<p class='text-danger '>Netinkami prisijungimo duomenys, patikslinkite</p>";
        }

        setcookie('wrong', "", time() - 10);
        ?>
        <h2 class="mb-5">Prisijungimas</h2>
        <form action="vidus.php" method="post">
            <div class="form-row">
                <div class="col-lg-4">
                </div>

                <div class="form-group col-lg-4">
                    <label for="exampleInputVardas"> Vartotojo vardas:
                    </label>
                    <input type="text" class="form-control" name="username" id="user">
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-4">
                </div>
                <div class="form-group col-lg-4">
                    <label for="exampleInputSlaptazodis"> Slaptažodis:
                    </label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>

            <input type="hidden" name="act" value="act">
            <p></p>
            <input class="btn btn-primary mt-3" type="submit" value="Prisijungti">


        </form>


    </body>
</html>
