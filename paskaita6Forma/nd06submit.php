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
        if (array_key_exists("salary", $_GET) && array_key_exists("npd", $_GET) && array_key_exists("tax", $_GET)) {
            if (is_numeric($_GET["salary"]) && is_numeric($_GET["npd"]) && is_numeric($_GET["tax"])) {

                $salary = $_GET["salary"];
                $npd = $_GET["npd"];
                $tax = $_GET["tax"];

                // nepaimta kad jei npd daugiau nei atlyginimas
                $res = ($salary - $npd) * ($tax / 100);
                echo " Mokesčių suma nuo : " . $salary . " eu yra " . $res;
            } else {
                echo "nepalikite tusciu reiksmiu ";
            }
        }
        ?>

        <?php
      //  mb_substr($str, $start)- lt kalbom ir pan. kiti simboliai
        
        
        if (array_key_exists("name", $_POST) && array_key_exists("subname", $_POST)) {

            $name = $_POST["name"];
            $subname = $_POST["subname"];

            $sutrumpinta = substr($name, 0, -2);
            $sutrumpinta2 = substr($name, 0, -1);
            $paskutinesDviRaides = substr($name, -2);
            //$paskutineRaide = substr($name, -1);
            // echo $paskutineRaide;

            if ($paskutinesDviRaides == "us") {
                $pakeitimas = "au";
                echo "Sveiki, " . $sutrumpinta . $pakeitimas . " Jūsų pavardė yra " . $subname . ".";
            } else if ($paskutinesDviRaides == "is") {
                $pakeitimas = "i";
                echo "Sveiki, " . $sutrumpinta . $pakeitimas . " Jūsų pavardė yra " . $subname . ".";
            } else if ($paskutinesDviRaides == "as") {
                $pakeitimas = "ai";
                echo "Sveiki, " . $sutrumpinta . $pakeitimas . " Jūsų pavardė yra " . $subname . ".";
            } else if ($paskutinesDviRaides == "ė") {
                $pakeitimas = "e";
                echo "Sveiki, " . $sutrumpinta . $pakeitimas . " Jūsų pavardė yra " . $subname . ".";
            } else {
                echo "Labas ".$name." Jūsų pavardė yra ". $subname . ".";
            }
//            $sutrumpinta = substr($name, 0, -1);  // vardo sutrumpintas vienu paskutiniu simboliu
//            $raide = "i";
//            echo "Sveiki, " . $sutrumpinta . $raide . " Jūsų pavardė yra " . $subname . ".";
        } else {
            echo "ne visos reikšmės buvo įvestos.. Karokite duomenų įvedimą";
        }
        ?>
    </body>
</html>
