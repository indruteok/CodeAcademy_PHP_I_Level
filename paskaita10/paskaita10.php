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
        //Rikiavimas masyve
        $a = [2, 1, 3];
        $i = 0;
        while ($i < count($a)) {
            echo "i  $i <br>";
            $j = $i;

            while ($j < count($a)) {
                echo "-j $j<br>";
                if ($a[$i] > $a[$j]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                }
                $j++;
            }
            echo "<hr>";
            $i++;
        }
        echo "<br>";
        print_r($a);
        echo "<hr><hr>";
        
        
        
        
        // rikiavimas nuo didziausio iki maziausio
       
        $a = [2, 1, 3];
        $i = 0;
        while ($i < count($a)) {
            echo "i  $i <br>";
            $j = $i;

            while ($j < count($a)) {
                echo "-j $j<br>";
                if ($a[$i] < $a[$j]) {
                    $temp = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $temp;
                }
                $j++;
            }
            echo "<hr>";
            $i++;
        }
        echo "<br>";
        print_r($a);
        echo "<hr><hr>";
        
        
        
        
        //  funkcija iskviecia pati save
        function phi($a){
            echo $a.'<br>';
            if($a==1||$a==2){
                return 1;
            }
            return phi($a-1)+phi($a-2);
        }
        echo phi(5);
        
        ?>
    </body>
</html>
