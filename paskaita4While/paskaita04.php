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
//        while(salyga){  // if viena karta daro, while sukasi tol kol ivykdma sakyga
//            veiksmas
//      }
        //        echo floor(4.5)===4;   (apvalina skaicius
        // skaiciu palyginimas 
        if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET)) {

            $a = $_GET["a"];
            $b = $_GET["b"];

            if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {
                if ($a < $b) {

                    $i = $a;
                    while ($i < $b) {
                        echo "didesnis yra " . floor($i) . '<br>';
                        $i = $i + 1;
                    }
                } else {
                    echo "a turetu buti mazesnis nei b";
                }
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }

        echo "<br><br><hr>";
        ?>




        <?php
//skaiciaus faktorialo skaiciavimas     
//        n!=(n-1)!n;
//        3!=3*2*1
//        5!=5*4*3*2*1;
//        echo "<br>";

        if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET)) {

            $a = $_GET["a"];
            $b = $_GET["b"];

            if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {

                $i = 1;
                $faktor = 1;
                while ($i <= $b) {
                    //   echo floor($i) . '<br>';
                    $faktor = $faktor * $i;
                    $i = $i + 1;
                }
                $i = 1;
                $faktor2 = 1;
                while ($i <= $a) {
                    //    echo floor($i) . '<br>';
                    $faktor2 = $faktor2 * $i;
                    $i = $i + 1;
                }
                echo "skaičiaus $b faktorialas " . $faktor . "<br>";
                echo "skaičiaus $a faktorialas " . $faktor2;
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }

        echo "<br><br><hr>";
        ?>




        <?php
// sudeda skaicius nurodytame intervale
//   a=5; b=10; c= 5+6+7+8+9+10
// 50 62
//6 4
        if (array_key_exists("a", $_GET) && array_key_exists("b", $_GET)) {

            $a = $_GET["a"];
            $b = $_GET["b"];

            if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {

                $i = $a;
                $c = 0;

                if ($i > $b) {
                    $temp = $i;
                    $i = $b;
                    $b = $temp;
                }
                while ($i <= $b) {
                    echo floor($i) . '<br>';
                    $c = $c + $i;
                    $i = $i + 1;
                }
                echo "tarpiniu skaiciu suma " . $c;
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }
        ?>
    </body>
</html>