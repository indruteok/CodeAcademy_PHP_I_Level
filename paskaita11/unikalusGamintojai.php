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

        function unikalusGamintojai() {
            $host = "localhost"; // adresas kur duomenu baze
            $user = "root";
            $pass = "";  //slaptazodis
            $db = "mobililinija"; // duomenu baze, prie kurios jungtis

            $connection = mysqli_connect($host, $user, $pass, $db); // prisijungimas prie db.  isaugomas i kintamaji.

            $query = mysqli_query($connection, "SELECT DISTINCT `gamintojas` FROM `telefonai` ");  // tas sql serveris ivykdo uzklausia prie kurio prisijungiam, antaras uzklausa nurodoma
            $total = mysqli_num_rows($query); // funkcija, kuri patikrina kiek yra eiluciu
            echo $total;

            $i = 0;
            while ($i < $total) {
                $telefonai = mysqli_fetch_assoc($query);  // is uzklausos, nespausdina tai perleidziam per Fetch kad spausdintu, po viena eilute
//                echo '<pre>';
//                print_r($telefonai);
//                echo "</pre>";
                echo "gamintojas: " . $telefonai['gamintojas'];

                echo "<hr>";

                $i++;
            }
            mysqli_close($connection); // db uzdarymas, paduodamas prisijungimo kintamasis
        }
        unikalusGamintojai();
        ?>
        <a href="vartotojasRenkasiGamintoja.php"><button  type="button">Back</button></a>

    </body>
</html>
