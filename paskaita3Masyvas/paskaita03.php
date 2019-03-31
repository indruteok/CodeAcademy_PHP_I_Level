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
        error_reporting(E_ALL);  // rodys visus erorus 
        ini_set("display_errors", 1); // rodys erorus

        $mas = [10, 20, 2];

        $mas = [
            "pirmas" => 10,
            "antras" => 20
        ];

        $mas = [80];  // perraso masyva
        $mas[] = 80;  // prideda masyva
        echo "spausdina masyvo 1 elementa: " . $mas[1];
        unset($mas[1]);  // istrinimas 
        echo "<br><br><hr>";

        echo "masyvo spausdinimas su pre: <br>";
        echo "<pre>";
        print_r($mas);
        echo "<pre>";

        echo "<br><br><hr>";
        ?>

        
        
        
        <?php
//        if (salyga) {
//            veiksmai
//        } else {//kitu atveju
//            //veiksmas
//        }
//        }      

        $a = 56;
        $b = 10;

        if ($b != 0) {   //&&-and ||- or
            $rez = $a / $b;
            echo $rez;
        } else if ($b == 0) {
            echo "nulis netinka";
        }

        echo "<br><br><hr>";
        ?>

        
        
        
        <?php
        // funkcija tikrina ar masyve yra tam tikras elementas : array_key_exists

        $masyvas = [
            "vardas" => "Tomas"
        ];

        if (array_key_exists("vardas", $masyvas)) {   // vardas- indeksas, raktas rba key
            echo "yra";
        } else {
            echo "nera";
        }

        echo "<br><br><hr>";
        ?>

        
        
        
        <?php
        $masy = $_GET;
           $masy=[
              "vardas" => "Tomas"
           ];
        if (array_key_exists("vardas", $masy)) {  // arba trupmiau: if (array_key_exists("vardas", $_GET)
            echo "Labas tavo vardas yra " . $masy["vardas"]; //    echo "Labas tavo vardas yra ".$_GET["vardas"];
        } else {
            echo "vardas neivestas ";
        }

        echo "<br><br><hr>";
        ?>

        
        
        
        <?php
//          10< smulkus
//        10> <100 vidutinis
//        >100 stambus

        $suma = 500;
        if ($suma < 10) {
            echo "smulkus";
        } else if ($suma >= 10 && $suma < 100) {
            echo "vidutinis";
        } else {
            echo "stambus";
        }

        echo "<br><br><hr>";
        ?>

        <?php
//skaiciu palyginimas didesnis mazesnis
        //  skaiciu palyginimas:
        $a = $_GET["a"];
        $b = $_GET["b"];
        //  var_dump(boolen)
        if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET)) {

            if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {

                $a = $_GET["a"];
                $b = $_GET["b"];

                if ($a == $b) {
                    echo "$a yra lygus $b";
                } else if ($a > $b) {
                    echo "$a yra daigiau uz $b";
                } else if ($a < $b) {
                    echo $a . " yra maziau uz " . $b;
                } else {
                    echo " pasitikrinkite ivestus duomenis";
                }
            } else {
                echo "irasykite tik skaicius";
            }
        } else {
            echo "nepalikite tusciu reiksmiu ";
        }

        echo "<br><br><hr>";
        ?>
    </body>
</html>
