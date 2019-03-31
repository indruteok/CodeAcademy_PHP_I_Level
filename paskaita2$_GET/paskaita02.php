<?php

//isvedimas:
echo"<b>Helo</b> world!! <br>";
//echo "<br />\n";  
echo 5 + 7;
echo "<br>";
echo 5 - 7;
echo "<br>";
echo 5 / 7;
echo "<br>";
echo 5 * 7;
echo "<br>";
echo "<hr><hr>";
?>


<?php

//http://localhost/index.php?sk1=1&sk2=7
//$_GET
echo "<br>";
$sk1 = $_GET["sk1"];
$sk2 = $_GET["sk2"];
$sum = $sk1 + $sk2;
echo $sk1;
echo "+";
echo $sk2;
echo "=";
echo $sum;
echo "<br>";

echo $sk1 . "+" . $sk2 . "=" . $sum . "<br>";
echo "$sk1 + $sk2 = $sum ";
echo "<br>";
echo '$sk1 + $sk2 = $sum';   // - isveda dolerio zenkla


echo "<br>" . "<br>";
echo "<hr><hr>";



error_reporting(E_ALL);  // rodys visus erorus 
ini_set("display_errors", 1); // rodys erorus
// reciau naudojama:
// $index1="sk1";
// $index1 => 5
// echo$masyvas[index1];


$masyvas = [
    "sk1" => $_GET["sk1"], // duomenu ivedimas i adreso ivedimo juosta: http://localhost/array.php?sk1=3&sk2=5
    "sk2" => $_GET["sk2"]     // indexas sk1ir sk2,  o kintmasis: su dolerio zenklu
];


$masyvas = $_GET;
echo "print_r: ";
print_r($masyvas);
echo "<br>";

echo "print_r: ";
print_r($_GET);  //  $_GET- masyvas ktis jau yra aprasytas, galima naudoti.
echo "<br>";
echo "<br>";

//print_r($_SERVER);   
echo "<hr><hr>";

echo "s1 ir sk2 daugyba:";
echo $masyvas["sk1"] * $masyvas["sk2"];
echo "<br>";
echo "<br>";

//echo $masyvas["sk1" ."*" ."sk2"];
// asociatyvus/zodynas tie su vardais masyvai. galima ir neduoti vardu.
echo "<hr><hr>";


$pavedimai = [4787, 79, 2.2];
//ptint_r($pavedimai);
//echo $pavedimai[$index] ."<br>";
//$index = $inex+1;

$cyrikas = 10; // prideda prie masyvo skaiciu
$pavedimai[] = $cyrikas;
echo '<pre>';
print_r($pavedimai);
echo '<pre>';
echo "<hr><hr>";

$pavedimai[] = $cyrikas;
echo '<pre>';
print_r($pavedimai);
echo '<pre>';
echo "<hr><hr>";

unset($pavedimai[2]);

echo '<pre>';
$pavedimai[] = $cyrikas;
print_r($pavedimai);
echo '<pre>';
?>
