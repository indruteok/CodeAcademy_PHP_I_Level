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

        // su string, stingas - ir antra susbstringas, is stingo pasalintu
        //pvz labas "a" turetu istrinti visas a raides bus lbs
        // pvz labas ir b , bus  las
        // iskaidyt i du masyvus 

        function cleartext($input1, $input2) {
            $skaitliukas = strlen($input1) - 1;
            $skaicius = strlen($input2);

            $i = 0;
            $output = 0;

            while ($skaitliukas >= $i) {
                if (substr($input1, $i, $skaicius) != $input2) {
                    $output = $output.substr($input1, $i, 1);
                    $i++;
                } else {
                    $i = $i + $skaicius;
                }
            }
            return $output;
        }

        $a = "labas labas";
        $b = "aba";
        echo cleartext($a, $b);
        echo "<hr>";

//        [PASKAITA8] [ND]
//Parašykite funkciją, kuri, turėdama du parametrus - a ir b, gražintų nelyginių skaičių tarp jų sumą.
//
//Pvz #1: suma(1, 3) -> 4 (1+3)
//Pvz #2: suma(2, 4) -> 3
//Pvz #3: suma(8, 1) -> 16 (1+3+5+7)   
        //   https://gist.github.com/indruteok/b85382088c8f16683b655078344a0c1e

        function skaiciuok($a, $b) {
            $res = 0;
            while ($a <= $b) {
                if ($a % 2 != 0) {
                    //$ats = $ats + $a;
                    echo "$a" . ", ";
                    $res = $res + $a;
                }
                $a++;
            }
            return $res;
        }

        function nelyginiuSkaiciuSuma($a, $b) {
            $ats = 0;
            $res = 0;
            if ($a > $b) {
                $res = skaiciuok($b, $a);
            }
            $res = skaiciuok($a, $b);
            echo "<br>";
            return $res;
        }

        $x = nelyginiuSkaiciuSuma(1, 9);
        echo $x;
        echo "<hr>";

//         [PASKAITA8] [ND]
//Parašykite funkciją "ar_pirminis", kuri patikrintų, ar duotasis skaičius yra pirminis.
//Skaičius yra pirminis, jei jis dalinasi tik iš 1 ir savęs (1 nėra pirminis skaičius).
//Pirmieji pirminiai skaičiai: 2, 3, 5, 7, 11, 13, 17, ...
//
//Pvz #1: ar_pirminis(1) -> false
//Pvz #2: ar_pirminis(7) -> true  
        //  https://gist.github.com/indruteok/92bc99083b11f7b9c90776a67656be3a

        function arPirminis($a) {
            $i = 1;
            $dalikliukiekis = 0;
            while ($i <= $a) {
                $i++;
                if ($a % $i == 0) {
                    $dalikliukiekis = $dalikliukiekis + 1;
                }
            }

            if ($dalikliukiekis == 1) {
                //  return $dalikliukiekis;
                return true;
            } else {
                return false;
            }

            $a = 15;
            arPirminis($a);
        }

//        if (dalikliuKiekis($a) == 1) {
//            echo "skaicius " . $a . " yra pirminis";
//        } else {
//            echo "skaicius " . $a . " nera pirminis";
//        }

        echo "<hr>";
        ?>
    </body>
</html>
