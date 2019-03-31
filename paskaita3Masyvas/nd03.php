<?php

error_reporting(E_ALL);  // rodys visus erorus 
ini_set("display_errors", 1); // rodys erorus
//[PASKAITA3] [ND]
//Parašykite programą, kuri pagal savaitės dienos numerį (1-7) pasakytų jos pavadinimą.
//Savaitės dienos numeris gaunamas iš vartotojo per GET parametrus.
## Pvz #1: //Įvestis (input): 1 //Išvestis (output): Pirmadienis
## Pvz #2: //Įvestis (input): 5 //Išvestis (output): Penktadienis


if (array_key_exists("a", $_GET)) {

    if (is_numeric($_GET["a"])) {
        $a = $_GET["a"];

        if ($a == 1) {
            echo "Pirmadienis";
        } else if ($a == 2) {
            echo "Antradienis";
        } else if ($a == 3) {
            echo "Treciadienis";
        } else if ($a == 4) {
            echo "Ketvirtadienis";
        } else if ($a == 5) {
            echo "Penktadienis";
        } else if ($a == 6) {
            echo "Sestadienis";
        } else if ($a == 7) {
            echo "Sekmadienis";
        } else {
            echo " pasitikrinkite ivestus duomenis";
        }
    } else {
        echo "irasykite tik skaicius";
    }
} else {
    echo "nepalikite tusciu reiksmiu ";
}

//$dienos = [
//  1 => 'Pirmadienis',
//  2 => 'Antradienis',
//  3 => 'Trečiadienis',
//  4 => 'Ketvirtadienis',
//  5 => 'Penktadienis',
//  6 => 'Šeštadienis',
//  7 => 'Sekmadienis'
//];
//if (array_key_exists("diena", $_GET)){
//  $diena = $_GET["diena"];
//  if (array_key_exists($diena, $dienos)) {
//    echo $dienos[$diena];
//  }
//  else {
//    echo "Ner tokios dienos, seniuk!";
//  }
//}
//else {
//	echo "neivesti duomenys";
//}


echo "<br>";
echo "<br>";

//    
//    
//    //[PASKAITA3] [ND]
//Parašykite programą, kuri pasakytų ar duotasis skaičius - lyginis.
//Skaičius gaunamas iš vartotojo per GET parametrus.
//Hint: reikia panaudoti dalybą su liekana (operatorius %).
//
//## Pvz #1:
//Įvestis (input): 6
//Išvestis (output): Lyginis
//
//## Pvz #2:
//Įvestis (input): 199
//Išvestis (output): Nelyginis



if (array_key_exists("c", $_GET)) {

    if (is_numeric($_GET["c"])) {
        $c = $_GET["c"];

        if (($c % 2) == 0) {
            echo "Įvestas skaičius $c yra lyginis";
        } else {
            echo "Įvestas skaičius $c yra nelyginis";
        }
    } else {
        echo "irašykite tik skaičius";
    }
} else {
    echo "nepalikite tuščių reikšmių ";
}
?>