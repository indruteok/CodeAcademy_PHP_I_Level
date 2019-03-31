<?php

include 'functions.php';

if (array_key_exists("sk1", $_POST) && array_key_exists("sk2", $_POST)) {
    if (is_numeric($_POST["sk1"]) && is_numeric($_POST["sk2"])) {

        $sk1 = $_POST["sk1"];
        $sk2 = $_POST["sk2"];
        $operation = $_POST["operation"];

        if ($operation == 1) {
            $rezultatas = $sk1 + $sk2;
        } else if ($operation == 2) {
            $rezultatas = $sk1 - $sk2;
        } else if ($operation == 3) {
            $rezultatas  = $sk1 * $sk2;
        } else if ($operation == 4 && $sk1 != 0 && $sk2 != 0) {
            $rezultatas  = $sk1 / $sk2;
        } else {
            echo " pasitikrinkite klaidas";
        }
        include 'result.php';
    } else {
        echo "nepalikite tusciu reiksmiu ";
    }
} else {
    include 'empty.php';
}
?>
