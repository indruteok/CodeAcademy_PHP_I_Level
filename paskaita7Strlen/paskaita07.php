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
        $vardas = "Tomas";
        $ilgis = strlen($vardas); //kintamojo ilgis, kiek raidziu yra
        //   echo $vardas[2]; //echo  m
        $i = 0;
        //$i=$ilgis-1 jei atvirkstine tvarjka
        while ($i < $ilgis) {
            echo $vardas[$i];

            $i = $i + 1;
        }
        echo "<br><hr><br>";

        // atvikstinis
        $il = $ilgis - 1; // priskirim ketvertui ir ji mazinam 
        while (0 <= $il) {
            echo $vardas[$il];

            $il = $il - 1;
        }
        echo "<br><hr><br>";


        //   tik trys raides
        $ilgis = strlen($vardas); //kintamojo ilgis, kiek raidziu yra
        //   echo $vardas[2]; //echo  m
        $i = 0;
        //$i=$ilgis-1 jei atvirkstine tvarjka
        while ($i <= 2) {
            echo $vardas[$i];

            $i = $i + 1;
        }
        echo "<br><hr><br>";

        echo substr($vardas, 2);  //echo mas
        echo "<br>";
        echo substr($vardas, 2, 1); // nuo antro(nuo kelinto) nuimamas 1.(kiek)
        echo "<br>";
        echo substr($vardas, 0, -2);   //neigiams dsk. kiek nuo galo ismesti  
        echo "<br>";
        echo substr($vardas, -2);  // galune tik du simboliai
        
        
        
        ?>
    </body>
</html>
