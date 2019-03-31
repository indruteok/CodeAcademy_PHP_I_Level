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
    <body class="mt-5 text-center bg-light">
<h2 class="mb-5"> Automobilių CRUD keitimas</h2>
        <?php
        include 'config.php';
        $id = addslashes($_GET['id']);

        $query = mysqli_query($connection, "SELECT * FROM  `automobiliai` WHERE `id` = '" . $id . "'");
        $total = mysqli_num_rows($query);

        if ($total != 1) {
            echo "<div class='alert alert-danger' role='alert'> nera duomenų kuriuos butu galima redaguoti </div>";
            echo " <a href='index.php'>grįžti atgal</a>";
        } else {

            $automobilisV = mysqli_fetch_array($query);         ///   mysqli_fetch_assoc($result), geriau naudot 
            ?>
            <form action="update.php?id=<?php echo $id; ?>" method="POST">
                Markė:<br>
                <input type="text" name="marke" value="<?php echo htmlspecialchars($automobilisV['Markė']); ?>"></input> <br>
                Modelis:<br>
                <input type="text" name="modelis" value="<?php echo htmlspecialchars($automobilisV['Modelis']); ?>"><br>
                pagaminimoMetai : <br>
                <input type="number" name="pagaminimoMetai" value="<?php echo $automobilisV['pagaminimoMetai']; ?>"><br>
                Kaina:<br>
                <input type="number" name="kaina" value="<?php echo $automobilisV['kaina']; ?>"><br>

                <input class="mt-5" type="submit" value="Išsaugoti">
            </form>

            <?php
        }
        mysqli_close($connection);
        ?>
    </body>
</html>
