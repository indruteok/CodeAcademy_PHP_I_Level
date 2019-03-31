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

        <!-- [PASKAITA6] [ND]
        Parašykite programą, kuri paskaičiuotų, kiek mokesčių žmogus turi sumokėti nuo pajamų. 
        Vartotojas įveda savo pajamų skaičių, neapmokestinamą pajamų dydį (NPD) ir mokesčių tarifą. 
        Duomenys keliauja GET metodu.
        
        Pvz #1: 500 pajamų, 200 NPD, 50% mokesčių tarifas -> 150
        Pvz #2: 1000 pajamų, 0 NPD, 100% mokesčių tarifas -> 1000     -->

        <form action="nd06submit.php">
            Pajamų dydis: <br>
            <input type="number" name="salary"><br>
            Neapmokestinamasis pajamų dydis:<br>
            <input type="number" name="npd"><br>
            Mokesčių tarifas: <br>
            <input type="number" name="tax"><br><br>

            <input type="submit" value="skaičiuoti">
        </form>

        <hr><hr>
        <!-- [PASKAITA6] [ND]
        Parašykite programą, kurioje vartotojas formoje įveda savo vardą ir pavardę. 
        Užsubmitinus formą, turi pasirodyti tekstas "Labas, <vardas>. Tavo pavardė yra <pavarde>." 
        Duomenys keliauja POST metodu.
        Bonus sudetingumas (nebūtina) - vardas turi būti kreipinys (pvz. Įvedus Tomas, turi išvesti "Labas, Tomai").-->


        <form action="nd06submit.php" method="POST">
            Įveskite savo vardą:<br>
            <input type="text" name="name"><br>
            Įveskite savo pavardę:<br>
            <input type="text" name="subname"><br><br>
            <input type="submit" value="toliau">

        </form>



        <?php
        ?>
    </body>
</html>
