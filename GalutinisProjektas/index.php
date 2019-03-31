<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Darželių keitimosi sistema </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style> 
            body{ display: inline-block;}


        </style>
    </head>
    <body class="m-5 bg-light ">
        <?php
//        
//        ivesti duomenis i sql
//        tikrini  ar nera sutapimu
//        jei yra sutapimai, issiuncia email. kontaktus.
//        
        ?>
        <div>
            <h2 class="mb-5">Darželių apsikeitimas:</h2>
            <h5>REGISTRACIJA:</h5>
            <form class="mt-2" action="" method="POST">
                <p class="mb-0">Vartotojo vardas: </p><input type="text" name="username">
                <p class="mb-0">Vartotojo slaptažodis: </p><input type="password" name="pass">
                <p class="mb-0">El. paštas: </p><input type="email" name="email">
                <p class="mb-0">Vardas:</p><input type="text" name="name">
                <p class="mb-0">Pavardė:</p><input type="text" name="lastname">
                <p class="mb-0">Telefonas: </p><input type="number" name="phone">
            </form>

            <input type="hidden" name ="act" value="act">
            <input class="m-2 btn-success" type="submit" name="submit" value="Registruotis">
        </div>
        
        <div>       
            <h5> Jei jau esate prisiregistravęs,</h5>
            <h5>    PRISIJUNKITE:</h5>


            <input class="m-2 btn-success" type="submit" name="submit" value="Prisijungti">
        </div>
    </body>
</html>
