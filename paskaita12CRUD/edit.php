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
        include 'config.php';
        $id = $_GET['id'];

        $ankekdotaiVisi = $crud->getEdit($id);
        ?>
        <form action="update.php?id=<?php echo $id; ?>" method="POST">
            Turinys:<br>
            <textarea name="turinys"> <?php echo $ankekdotaiVisi['anekdotas']; ?> </textarea> <br>
            Kategorija:<br>
            <input tabindex="text" name="kategorija" value="<?php echo $ankekdotaiVisi['kategorija']; ?>"><br>
            Reitingas: <br>
            <input type="range" min="1" max="10" value="<?php echo $ankekdotaiVisi['reitingas']; ?>"  name="reitingas"><br>

            <input type="submit" value="Išsagoti">
        </form>
    </body>
</html>
