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
        // masyvas
        // surasti maziausia
        //     $skaiciai = array(6, 2, 10, 4, 15);
        //       $lowest = false;
//        $temp = skai ;
//        while ($i < sizeof($skaiciai) - 1) {
//            //  if ($skaiciai[$i] < $skaiciai[$i + 1]) {
//
//            $skaiciai[0] = $temp;
//            echo "sk $skaiciai[$i] " . "temp $temp";
//            $temp < $skaiciai[$i + 1];
//            
//            $i++;
//            //    }
//        }
//        echo "nieko"
//        
//         if($weight <= $min ) {
//        $min =  $weight ;
//    }
//        
//        $skaiciai = [ 6, 25, 27, 321, 255, 4545, 4];
//        $i = 0;
//        $mazesnis = 0;
//        $didesnis = 1;
//
//        while ($i < sizeof($skaiciai) - 1) {
//
//            $i++;
//
//
//            if ($skaiciai[$mazesnis] < $skaiciai[$didesnis]) {
//                $min = $skaiciai[$mazesnis]; //6
//                $didesnis = $didesnis + 1; //2
//            } else {
////                $min=$skaiciai[$didesnis];
////                $mazesnis=$mazesnis+1;
//            }
//        }
//        echo $min;
////            $min = $skaiciai[$i];
////            echo " $min <br>";
////            echo " <br>";
//            $i++;
//
//            if ($skaiciai[$i] < $skaiciai[$i + 1]) {
//                $min = $skaiciai[$i];
//
//
//
//                if ($min < $skaiciai[$i + 1]) {
//                    $min = $skaiciai[$i];
//                    echo " $min<br>";
//                    echo " <br>";
//                }
//            } else {
//                $min = $skaiciai[$i + 1];
//                echo " $min";
//                echo " <br>";
//            }
//            // echo " $min";
//        }
//        if ($skaiciai[0] < $skaiciai[1]) {
//            echo " &skaiciai[]";
//        } else if ($skaiciai[0] < $skaiciai[2]) {
//            echo " &skaiciai[2] ";
//        }

          echo "<br><br><hr>";
        ?>




        <?php
//Rikiavimas ciklas cikle

        $skaiciai = [1, -2, 3, 5, 999, 9999, -5];

        $maziausias = $skaiciai[0];
        $i = 0; // rodo elementa su kuriuo dirba
        $max = sizeof($skaiciai) - 1;  // indeksu kiekies,atemus paskutinio masyvo indexa
        //  echo $max;

        while ($i <= $max) {
            $skaicius = $skaiciai[$i];
          //  echo "$i" . " elemento skaicius yra " . "$skaicius" . " is ju mazesnis yra " . $maziausias . '<br>';

            if ($skaicius < $maziausias) {    // didziausio sukesti >
                $maziausias = $skaicius;
                //echo "dar mazsnis" . $maziausias;
            }

            $i++;
        }
        echo "maziausias skaicius is masyvo: $maziausias";


        // echo $sk[$max];
        ?>
    </body>
</html>
