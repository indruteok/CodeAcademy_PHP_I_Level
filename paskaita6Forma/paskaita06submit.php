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
        echo "<h2>Ačiū už duomenis.</h2> <br>";

//        $name = $_GET["name"];
//        $birthyear = $_GET["birthear"];
//        $gender = $_GET["gender"];
//
//        echo "<b>Jūsų pateikti duomenys:</b> <br>";
//        echo "<b>Vardas:</b>  " . $name . " <br><b>Gimimo metai:</b> " . $birthyear . "<br><b>Lytis:</b> " . $gender;
        echo " <hr>";
        echo " <hr>";

        if (array_key_exists("1sk", $_GET) && array_key_exists("2sk", $_GET)) {

            if (is_numeric($_GET["1sk"]) && is_numeric($_GET["2sk"])) {

                $a = $_GET["1sk"];
                $b = $_GET["2sk"];

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
        ?>
        <pre>
            <?php
            print_r($_POST);


            echo "<hr><hr>";



            if (array_key_exists("sk1", $_POST) && array_key_exists("sk2", $_POST)) {

                if (is_numeric($_POST["sk1"]) && is_numeric($_POST["sk2"])) {
                    $sk1 = $_POST["sk1"];
                    $sk2 = $_POST["sk2"];

                    if ($sk1 > $sk2) {
                        $temp = $sk1;
                        $sk1 = $sk2;
                        $sk2 = $temp;
                    }


                    if ($sk1 % 2 == 0) {
                        $sk1 = $sk - 2;
                    } else {
                        $sk1 = $sk1 - 1;
                    }





                    while ($sk1 <= $sk2) {

                        $sk1 = $sk1 + 2;
                        echo "$sk1, ";
                        //  if (($sk1 % 2) == 0) {
                        //   } else {
                        //   }
                    }
                } else {
                    echo "irašykite tik skaičius";
                }
            } else {
                echo "nepalikite tuščių reikšmių ";
            }
            ?>
        </pre>
    </body>
</html>
