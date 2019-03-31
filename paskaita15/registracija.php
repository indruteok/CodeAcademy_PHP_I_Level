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
    <body class=" mt-5 bg-light text-center container">
        <?php
        session_start();
        ?>
        <h2 class="mb-5 ">Registracija: </h2>
        <form action="registracijosF.php" method="post" class="col-lg-12">
            <div class="form-row">
                <div class="col-lg-4">
                </div>
                <div class="form-group col-lg-4">

                    <label for="exampleInputVardas"> Įveskite vartotojo vardą:
                    </label>
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-4">
                </div>
                <div class="form-group col-lg-4">
                    <label for="exampleInputSlaptazodis">Įveskite vartotojo slaptažodį:
                    </label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <input type="hidden" name="act2" value="act2">
            <p></p>
            <input class="btn btn-primary mt-3" type="submit" value="Užsiregistruoti">


        </form>


    </body>
</html>
