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

        https://gist.github.com/indruteok/d339ca417585bd4ef7d6081ecec3690e

        <!--        [PASKAITA7] [ND]
        Parašykite programą, kuri vartotojui, įvedus el. pašto adresą, pasakytų koks yra gavėjas ir domenas.
        El. pašto struktūra: gavėjas@domenas
        
        Pvz #1: tomas@cerkauskas.lt -> gavėjas: tomas; domenas: cerkauskas.lt
        Pvz #2: hello@example.com -> gavėjas: hello; domenas: example.com
        Pvz #3: admin@localhost -> gavėjas: admin; domenas: localhost-->

        <form action="nd07_2.php" method="POST">
            El. pašto adresas:   
            <input type="email" name="email"><br>
            <br><br>

            <input type="submit" name="submit" value="Registruotis">


        </form>

        <hr>
        
        https://gist.github.com/indruteok/c2c7ea90522966deece3065c1b72fbcd

        <!--              [PASKAITA7] [ND]
        Parašykite programą, kuri pasakytų, ar žodis yra palindromas.
        Palindrominiai žodžiai lygiai taip pat skaitomi iš abiejų pusių.
        
        Pvz #1: mama -> ne palindromas
        Pvz #2: kek -> palindromas
        Pvz #3: abba -> palindromas
        Pvz #4: tomas -> ne palindromas     
        -->

        <form action="nd07_2.php" method="POST">
            Pasitikrinkite ar zodis yr palindromas: <br>
            <input type="text" name="text"><br>

            <input type="submit" name="submit" value="Tikrinti">
        </form>


        <?php
        ?>
    </body>
</html>
