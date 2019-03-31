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
//        Parašykite programą, kuri pakeltų skaičių laipsniu. Vartotojas duoda dvi reikšmes: b ir p. B yra pagrindas, p - laipsnis.
//Pvz #1: kai b=2, p=3, tai 2^3=2*2*2=8
//Pv #2: kai b=5, p=2, tai 5^2=5*5=25

        if (array_key_exists("b", $_GET) && array_key_exists("p", $_GET)) {

            $b = $_GET["b"];
            $p = $_GET["p"];   //laipsnis  pataisyti jei neigiamas 
            $ats = 1;
            $i = 1;
            $p = abs($p);
            if (is_numeric($_GET["b"]) && is_numeric($_GET["p"])) {

                while ($i <= $p) {
                    $ats = $ats * $b;
                    $i++;
                }

                echo "skaičių " . $b . " pakėlus " . $p . "-uoju lapsniu, gauname: " . $ats;
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }

        echo "<br>";



//ARBA TRUMPIAU:
        if (array_key_exists("b", $_GET) && array_key_exists("p", $_GET)) {

            $b = $_GET["b"];
            $p = $_GET["p"];

            if (is_numeric($_GET["b"]) && is_numeric($_GET["p"])) {

                echo "skaičių " . $b . " pakėlus " . $p . "-uoju lapsniu, gauname: " . pow($b, $p);
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }
        ?>
    </body>
</html>
