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
        <form action="functions2.php" method="POST">
            <p>Irasykite ieškomo telofono modelį</p>
            <input type="text" name="gamintojas" >

            <input type="submit" value="Ieškoti">
        </form> 

        <p>ARBA</p>
        <form action="functions.php" method="POST"> 
            <p> Išsirinkite telefonų gamintoją:


                <!--                naudot Distinct isimant unikalias reiksmes-->


                <select name="operation">

                    <?php
                    include 'functions.php';
                    unikalusGamintojai();
                    
                    
                    $i=0;
                    while ($i){
                        
                        
                        
                       echo "<option value=".$i." selected='' >Samsung</option>   "; 
                      $i++;  
                    }
                    
                    
                    ?>
                    <option value="Samsung" selected="" >Samsung</option>
                    <option value="Telefon" selected="">Telefon</option>
                    <option value="Apple" selected="" >Apple</option>
                    <option value="Vajei" selected="">Vajei</option>
                    <option value="Sony" selected="">Sony</option
                    <option value="Huavei" selected="">Huavei</option>
                    <option value="Xiaomi" selected="">Xiaomi</option>
                </select><br>

                <input type="submit" value="Pasirinkti">
        </form>  
<?php ?>
    </body>
</html>
