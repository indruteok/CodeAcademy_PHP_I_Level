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
        //   [PASKAITA11] [ND]
//Sukurkite lentelę `knygos` su laukais isbn (tekstas), autorius (tekstas), pavadinimas (tekstas).
//Per phpmyadmin susiveskite ~10 įrašų. Parašykite programą, kuri leistų pagal isbn surasti knygos autorių ir pavadinimą.
      //  https://gist.github.com/indruteok/3835e9761660692c31bebc641b1c7661
        ?>
        <h2>Knygos paieška:</h2>
        <form action="nd2.php" method="POST">
            Nurodikyte knygos isbn:
            <input type="number" name="isbn">

            <input type="submit" value="Ieškoti">
        </form>
    </body>
</html>
