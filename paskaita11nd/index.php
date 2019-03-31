<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        <?php
//                [PADKAITA11] [ND]
//ukurkite lentelę `kontaktai` su laukais vardas (tekstas), pavarde (tekstas), el. paštas (tekstas), gimimo metai (skaičius). 
//Per phpmyadmin susiveskite įrašų. Parašykite programą, kuri leistų įvesti gimimo metų rėžius (nuo-iki) ir pagal tai atfiltruotų įrašus. 
//Jei jokie nepasirinkti, tuomet rodyti visus//
     //   https://gist.github.com/indruteok/6c0c50b39fb2a6cb1485babe933c6f1b
        ?>

        <h2>Kontaktų paieška:</h2>
        <form action="nd.php" method="POST">
            Gimimo metai nuo:
            <input type="number" name="nuo">
            Gimimo metai iki:
            <input type="number" name="iki">

            <input type="submit" value="Ieškoti">
        </form>

    </body>
</html>
