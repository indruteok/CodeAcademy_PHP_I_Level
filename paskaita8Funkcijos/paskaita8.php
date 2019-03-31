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
// issapusdinti Varda is kitos puses/ atvirksciai        
        $vardas = "Tomas";
        $startas = strlen($vardas) - 1;
        $pabaiga = 0;
        $skaitliukas = $startas;
        $rezultatas = "";

        while ($skaitliukas >= $pabaiga) {
            $rezultatas = $rezultatas . $vardas[$skaitliukas];
            $skaitliukas--;
        }
        echo $rezultatas;

        //TEMA FUNKCIJOS      
//        function pavadinimas(argumentai){
//            kunas
//        }        
        echo "<hr>";

// sumos funkcija        
        function suma($a, $b) {
            echo $a + $b;
        }

        suma(2, 5);
        echo "<hr>";

// funkcija apvercianti zodi is kitos puses
        function my_strrev($vardas) {
            //     $vardas="Tomas";
            $startas = strlen($vardas) - 1;
            $pabaiga = 0;
            $skaitliukas = $startas;
            $rezultatas = "";

            while ($skaitliukas >= $pabaiga) {
                $rezultatas = $rezultatas . $vardas[$skaitliukas];
                $skaitliukas--;
            }
            // echo $rezultatas;
            return $rezultatas;
        }

        my_strrev("Tomas");

        echo strrev(strrev("Tomas"));  // apvercia atvirksciai ir atgal

        $apverstas = my_strrev("Tomas"); // negrazina, o issapuasdina.   
        $apverstas2 = my_strrev(my_strrev("Tomas"));

        echo "<hr>";

        // funkcijoje parasyti, kad is vardo padarytu kreipini,       


        function kreipinys($name) {
            $sutrumpinta = substr($name, 0, -2);
            $sutrumpinta2 = substr($name, 0, -1);
            $paskutinesDviRaides = substr($name, -2);

            if ($paskutinesDviRaides == "us") {
                $pakeitimas = "au";
                return $sutrumpinta . $pakeitimas;
            } else if ($paskutinesDviRaides == "is") {
                $pakeitimas = "i";
                return $sutrumpinta . $pakeitimas;
            } else if ($paskutinesDviRaides == "as") {
                $pakeitimas = "ai";
                return $sutrumpinta . $pakeitimas;
            } else if ($paskutinesDviRaides == "ė") {
                $pakeitimas = "e";
                return $sutrumpinta . $pakeitimas;
            } else {
                return $name;
            }
        }

        //     kreipinys("Tomas");
        echo " Labas " . kreipinys("Tomas") . " Jūsų pavardė yra Pavardenis";

        echo "<hr>";

// funkcija ar tekstas yra palindromas   

        function palindrome($zodis) {

            if (strrev($zodis) == $zodis) { // string rasomas is kitos puses
                return 1;
            } else {
                return 0;
            }
        }

        $zodis = "SaVas";


        if (palindrome(strtolower($zodis))) {
            echo "$zodis yra palindromas";
        } else {
            echo "$zodis nera palindromas";
        }
        echo "<hr>";

// funkcija ar tekstas yra palindromas
        $zodis = "SaVas";

        function palindromas2($zodis) {
            strtolower($zodis);
            $startas = strlen($zodis) - 1;
            $pabaiga = 0;
            $skaitliukas = $startas;
            $rezultatas2 = "";

            while ($skaitliukas >= $pabaiga) {
                $rezultatas2 = $rezultatas2 . $zodis[$skaitliukas];
                $skaitliukas--;
            }
            return $rezultatas2;
        }

        $zodis = "savas";
        if ($zodis == palindromas2($zodis)) {
            echo "$zodis tai yra palindromas";
        } else
            echo "$zodis tai nera palindromas";
        echo "<hr>";
// funkcija kuri pasako maziausia reiksme 

        $skaiciai = [1, -2, 3.5, 5, 999, 9999, -5];
        echo '<pre>';
        print_r($skaiciai);
        echo '<pre>';
        echo "<br><br>";

        function maziausiaReiksme($skaiciai) {
            $max = $skaiciai[0];
            $i = 0; // rodo elementa su kuriuo dirba
            $ilgisMasyvo = sizeof($skaiciai) - 1;  // indeksu kiekies,atemus paskutinio masyvo indexa
            //  echo $max;
            while ($i <= $ilgisMasyvo) {
                $skaicius = $skaiciai[$i];
                //      echo "$i" . " elemento skaičius yra " . "$skaicius" . " is jų didesnis yra " . $max . '<br>';
                if ($skaicius > $max) {
                    $max = $skaicius;
                    //       echo "dar didesnis" . $max;
                }
                $i++;
            }
            return $max;
        }

        echo "max reiksme " . maziausiaReiksme($skaiciai);
        echo "<hr>";

        // rekursija , funkcija kuri kviecia pati save
        //2,2 / 3,1/ 4,0
//        function f($a, $b) {
//            if ($b == 0) {
//                return $a;
//            }
//            return f($a + 1, $a - 1);
//        }
//
//        echo f(2, 2);
//        echo "<hr>";
        // n tajis fibanacio narys

        function fib($n) {
            if ($n <= 2) {
                return 1;
            }

            return fib($n - 2) + fib($n - 1);
        }

        echo fib(5);
        echo "<hr>";



      
        ?>
    </body>
</html>
