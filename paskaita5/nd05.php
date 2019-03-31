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
//     [PASKAITA5] [ND]
//Duotas skaičių masyvas (ne iš vartotojo, tiesiog apsirašykit masyvą iš betkokių skaičių). Suraskite didžiausią reikšmę.
//Pvz #1: jei duoti skaičiai 2, 1, 3, tai atsakymas 3
//Pvz #2: jei duoti skaičiai -1, 5, 9, tai atsakymas 9
        echo "1 uzdavinys:<br><br>";
        $skaiciai = [1, -2, 3.5, 5, 999, 9999, -5];
        echo '<pre>';
        print_r($skaiciai);
        echo '<pre>';
        echo "<br><br>";

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
        echo "didžiausias iš duotų skaičių " . "$max";
        echo "<hr>";
        echo "<hr>";

//        [PASKAITA5] [ND]
//Suskaičiuokite visų nelyginių skaičių sumą nuo 1 iki 100.
//Hint: atsakymas 2500
        echo "2 uzdavinys:<br><br>";

        $i = 1;
        $ats = 0;
        While ($i < 100) {
            if ($i % 2 != 0) {
                $ats = $ats + $i;
                echo "$i" . ", ";
            }
            $i++;
        }
        echo "<br>" . "visu suma: " . "$ats" . "<hr>" . "<hr>";

//     [PASKAITA5] [ND] [ADVANCED]
//Parašykite programą, kuri surikiuotų masyvą didėjimo tvarka (t.y. nuo didžiausio iki mažiausio).
//Pvz #1: [3, 2, 1] -> [3, 2, 1]
//Pvz #2: [1, 2, 3] -> [3, 2, 1]
//Pvz #3: [2, 1, 3] -> [3, 2, 1] 
        echo "3 uzdavinys:<br><br>";

//        $skaiciai3 = [1, -2, 3.5, 5, 999, 9999, -5];
//        echo '<pre>';
//        print_r($skaiciai3);
//        echo '<pre>';
//        echo "<br><br>";
//
//        $ilgisMasyvo = sizeof($skaiciai3) - 1;
//        $laikinas = 0;
//        $i = 1;
//        $j = 1;
//        while ($i < $ilgisMasyvo) {
//
//            while ($j < $ilgisMasyvo - 1) {               
//                if ($skaiciai3[$j - 1] > $skaiciai3[$j]) {
//                    $laikinas = $skaiciai3[$j - 1];
//                    echo "laikinas" . $laikinas . "<br>";
//                    $skaiciai3[$j - 1] = $skaiciai3[$j];
//                    echo "j-1" . $laikinas . "<br>";
//                    $skaiciai3[$j] = $skaiciai3[$j - 1];
//                    echo "j" . $laikinas . "<br>";
//                    echo '<pre>';
//                    echo "$skaiciai3[$j]";
//                    echo '<pre>';                                     
//                }
//                $j++;
//            }
//            $i++;
//            // print_r($skaiciai3);
//        }
        echo "<br>" . "<hr>" . "<hr>";
//        [PASKAITA5] [ND]
//Parašykite programą, kuri suskaičiuotų duotų skaičių aritmetinį vidurkį. Duomenys yra masyve ir ne iš vartotojo.
//
//Pvz #1: [1, 2, 3] -> 2
//Pvz #2: [3, 3, 3, 4, 4, 4] -> 3.5
//Pvz #3: [6] -> 6
        echo "4 uzdavinys:<br><br>";
        $skaiciai2 = [3, 3, 3, 4, 4, 4];
        echo '<pre>';
        print_r($skaiciai2);
        echo '<pre>';
        echo "<br><br>";

        $ilgisMasyvo2 = sizeof($skaiciai2) - 1; //masyvo ilgis
        $kiek = sizeof($skaiciai2); //kiek elementu yra masyve

        $i = 0;
        $sum = 0;
        $arVid = 0;

        while ($i <= $ilgisMasyvo2) {
            $skaicius2 = $skaiciai2[$i];
            //  echo "sk"."$skaicius2"."<br>";
            $sum = $sum + $skaicius2;
            // echo "sum"."$sum"."<br>";
            $i++;
            //  echo "i"."$i"."<br>";
        }
        $arVid = $sum / $kiek;
        // echo "ats"."$arVid"."<br>";

        echo "<br>" . "aritmetinis vidurkis yra: " . "$arVid" . "<hr>" . "<hr>";

//       [PASKAITA5] [ND]
//Parašykite programą, kuri suskaičiuotų masyve esančių didžiausio ir mažiausio skaičių aritmetinį vidurkį.
//
//Pvz #1: [1, 2, 3] -> 2
//Pvz #2: [6, 7, 4, -7, 0] -> 0
//Pvz #3: [2] -> 2
        echo "5 uzdavinys:<br><br>";
        $skaiciai3 = [6, 7, 4, -7, 0];
        echo '<pre>';
        print_r($skaiciai3);
        echo '<pre>';
        echo "<br><br>";

        $min3 = $skaiciai3[0];
        $max3 = $skaiciai3[0];
        $i = 0; // rodo elementa su kuriuo dirba
        $ilgisMasyvo3 = sizeof($skaiciai3) - 1;  // indeksu kiekies

        while ($i <= $ilgisMasyvo3) {
            $skaicius3 = $skaiciai3[$i];
            if ($skaicius3 > $max3) {
                $max3 = $skaicius3;
            }
            if ($skaicius3 < $min3) {
                $min3 = $skaicius3;
            }
            $i++;
        }
        $arVid3 = ($min3 + $max3) / 2;
        echo "<br>" . "didžiausio " . "($max3) " . "ir mažiausio " . "($min3)" . " skaičiaus aritmetinis vidurkis yra: " . "$arVid3" . "<hr>" . "<hr>";


//     [PASKAITA5] [ND]
//
//Parašykite programą, kuri patikrintų, ar vartotojo duotas skaičius yra pirminis. 
//Skaičius yra pirminis, jei jis dalinasi tik iš 1 ir savęs (1 nėra pirminis skaičius). 
//Pirmieji pirminiai skaičiai: 2, 3, 5, 7, 11, 13, 17, ...
//Pvz #1: 1 -> ne
//Pvz #2: 7 -> taip   
        echo "6 uzdavinys:<br><br>";
        if (array_key_exists("a", $_GET)) {
            $a = $_GET["a"];

            if (is_numeric($_GET["a"])) {

                $i = 1;
                $dalikliukiekis = 0;
                while ($i <= $a) {
                    $i++;
                    //  echo "i = $i  " . "<br>";
                    if ($a % $i == 0) {
                        $dalikliukiekis = $dalikliukiekis + 1;
                        //    echo "daliklis++" . $dalikliukiekis . "<br>";
                    }
                }
                if ($dalikliukiekis == 1) {
                    echo "skaicius " . $a . " yra pirminis";
                } else {
                    echo "skaicius " . $a . " nera pirminis";
                }
            } else {
                echo "irašykite tik skaičius";
            }
        } else {
            echo "nepalikite tuščių reikšmių ";
        }
        echo "<br>";
        ?>
    </body>
</html>


