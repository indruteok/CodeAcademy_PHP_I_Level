<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>-->
<?php


//substr($string, $start  //iskarpo nuo kiekiki kiek
if (array_key_exists("email", $_POST)) {
    $email = $_POST["email"];
    $ilgis = strlen($email) - 1;  // kiek indeksu masyve
    $i = 0;

    echo "gavejas: ";
    while ($i < $ilgis) {

        if ($email[$i] == "@") {
            $email[$i] == "";

            break;
        }
        echo $email[$i];
        $i = $i + 1;
    }

    echo "<br> domenas: ";
    echo substr($email, $i + 1);
} else {
    echo "ne visos reikšmės buvo įvestos.. Karokite duomenų įvedimą";
}
echo "<hr>";

//                [PASKAITA7] [ND]
//        Parašykite programą, kuri pasakytų, ar žodis yra palindromas.
//        Palindrominiai žodžiai lygiai taip pat skaitomi iš abiejų pusių.
//        
//        Pvz #1: mama -> ne palindromas
//        Pvz #2: kek -> palindromas
//        Pvz #3: abba -> palindromas
//        Pvz #4: tomas -> ne palindromas     
//       


if (array_key_exists("text", $_POST)) {
    $text = $_POST["text"];

    if ((strrev($text) == $text)) {
        echo "žodis $text yra Palindormas";
    } else {
        echo "žodis $text nėra palindromas";
    }
} else {
    echo "ne visos reikšmės buvo įvestos.. Karokite duomenų įvedimą";
}
echo "<hr>";
?>
<!--    </body>
</html>-->
