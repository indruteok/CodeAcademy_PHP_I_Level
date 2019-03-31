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
        <form action="store.php" method="POST">
            Turinys:<br>
            <textarea name="turinys"></textarea> <br>
            Kategorija:<br>
            <input tabindex="text" name="kategorija" value=""><br>
            Reitingas: <br>
            <input type="range" min="1" max="10" name="reitingas"><br>

            <input type="submit" value="Išsagoti">
        </form>

    </body>
</html>
