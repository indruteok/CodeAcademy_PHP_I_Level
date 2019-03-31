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
        // suskaiciuoti kiek sakinyje ivesta zodziu  
// gali buti daugiau nei vienas tarpas arba  jei  vienas simbolis tap dvieju ar tai simbolis ar raide 

        if (array_key_exists("sakinys", $_POST)) {
            $sakinys = $_POST["sakinys"];
            $sakinys1 = trim($sakinys);  // trim is priekio ir galo  ismeta tarpus
            $ilgis = strlen($sakinys1) - 1;  // kiek indeksu masyve

            
            $arrayChar=[q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m,ą,č,ę,ė,į,š,ų,ū];
            $i = 0;
            $kiekis = 0;
            while ($i < $ilgis) {
                if ($sakinys1[$i] == " ") {
                    $kiekis = $kiekis + 1;
                }else if($sakinys1[$i].$sakinys1[$i+1].$sakinys1[$i+2] == " ".  "masyvas su raidem ir tikrina ar yra" ." "   ){
                    $kiekis=$kiekis-1;
                }
                
                
                
                $i++;
            }
            $zodziuKiekis = $kiekis + 1;
            echo "įrašytas žodžių kiekis sakinyje " . $zodziuKiekis;
        } else {
            echo "ne visos reikšmės buvo įvestos.. Karokite duomenų įvedimą";
        }
        ?>
    </body>
</html>
