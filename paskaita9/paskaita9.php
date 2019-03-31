<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <pre>
            <?php print_r($_POST); ?>
        </pre>

        <form action="paskaita9.php" method="POST">
            <input type="number" name="sk1" value="<?php echo 'sk1'; ?>"><br>
            <select name="operation">
                <option value="1" selected="Sudetis" >Sudetis</option>
                <option value="2" selected="<?php if($operation===2) echo "selected" ; ?>">Atimtis</option>
                <option value="3" selected="" >Daugyba</option>
                <option value="4" >Dalyba</option>

            </select><br>
            <input type="number" name="sk2" value="<?php echo 'sk2'; ?>"><br>
            <input type="submit" value="skaiciuok">
        </form>  

        <?php
        if (array_key_exists("sk1", $_POST) && array_key_exists("sk2", $_POST)) {
            if (is_numeric($_POST["sk1"]) && is_numeric($_POST["sk2"])) {

                $sk1 = $_POST["sk1"];
                $sk2 = $_POST["sk2"];
                $operation = $_POST["operation"];

                if ($operation == 1) {
                    $suma = $sk1 + $sk2;
                    echo $suma;
                } else if ($operation == 2) {
                    $skirtumas = $sk1 - $sk2;
                    echo $skirtumas;
                } else if ($operation == 3) {
                    $daugyba = $sk1 * $sk2;
                    echo $daugyba;
                } else if ($operation == 4 && $sk1 != 0 && $sk2 != 0) {
                    $dalyba = $sk1 / $sk2;
                    echo $dalyba;
                } else {
                    echo " pasitikrinkite klaidas";
                }
            } else {
                echo "nepalikite tusciu reiksmiu ";
            }
        }

        echo "<div style='background-color':red'>";
        ?>

    </body>

</html>
