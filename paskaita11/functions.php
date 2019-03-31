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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php

        function filtruotiGamintoja() {
            $host = "localhost"; // adresas kur duomenu baze
            $user = "root";
            $pass = "";  //slaptazodis
            $db = "mobililinija"; // duomenu baze, prie kurios jungtis
            $operation = $_POST["operation"];

            $connection = mysqli_connect($host, $user, $pass, $db); // prisijungimas prie db.  isaugomas i kintamaji.

            $query = mysqli_query($connection, "SELECT * FROM `telefonai` WHERE `gamintojas`='$operation'");  // tas sql serveris ivykdo uzklausia prie kurio prisijungiam, antaras uzklausa nurodoma
            $total = mysqli_num_rows($query); // funkcija, kuri patikrina kiek yra eiluciu
            echo $total;

            $i = 0;
            while ($i < $total) {
                $telefonai = mysqli_fetch_assoc($query);  // is uzklausos, nespausdina tai perleidziam per Fetch kad spausdintu, po viena eilute
//                echo '<pre>';
//                print_r($telefonai);
//                echo "</pre>";
                echo "gamintojas: " . $telefonai['gamintojas'];
                echo "<br>modelis: " . $telefonai['modelis'];
                echo "<br>kaina: " . $telefonai['kaina'];
                echo "<hr>";

                $i++;
            }
            mysqli_close($connection); // db uzdarymas, paduodamas prisijungimo kintamasis
        }

        echo "Galimi pasirinkto gamintojo telefonų modeliai ir kainos:";

        filtruotiGamintoja();
        ?>
        <a href="vartotojasRenkasiGamintoja.php"><button  type="button">Back</button></a>
    </body>
</html>
