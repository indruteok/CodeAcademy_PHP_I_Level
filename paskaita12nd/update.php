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
        <?php
        include 'config.php';

        ///patikrint tuscius laukus, patikrinti db


        if (array_key_exists("marke", $_POST) && array_key_exists("modelis", $_POST) && array_key_exists("pagaminimoMetai", $_POST) && array_key_exists("kaina", $_POST)) {
            $id = addslashes($_GET['id']); // patikrinti ar tas id yra db yrase, kaip ir edite
            $marke = addslashes($_POST['marke']);  // aPSAUGA NUO INJEKCIJU, kad kabuciu  neskaitytu. dirbant su duomabze butina !!
            $modelis = addslashes($_POST['modelis']);
            $pagaminimoMetai = addslashes($_POST['pagaminimoMetai']);
            $kaina = addslashes($_POST['kaina']);
            $year = (new DateTime)->format("Y");


            if (!empty($marke) && !empty($modelis)) {
                trim($marke);
                trim($modelis);


                if (is_numeric($_POST["pagaminimoMetai"]) && is_numeric($_POST["kaina"])) {

                    if ($pagaminimoMetai >= 1897 && $pagaminimoMetai <= $year && $kaina > 0) {
                        mysqli_query($connection, "UPDATE `automobiliai` SET `Markė` = '" . $marke . "', "
                                . "`Modelis`='" . $modelis . "', "
                                . "`pagaminimoMetai`='" . $pagaminimoMetai . "', "
                                . "`kaina`='" . $kaina . "'"
                                . "WHERE `id` = '" . $id . "' ");
                    } else {
                        echo "<div class='alert alert-danger' role='alert'> Pasitikrinkite įvestus duomenis: pirmas automibilis pagamintas 1897m ir kaina - teigiamas skaičius.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger' role='alert'>  Pasitikrinkite įvestus duomenis: pirmas automibilis pagamintas 1897m ir kaina - teigiamas skaičius. </div>";
                }
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>  nepalikite tuščių reikšmių </div>";
        }

        mysqli_close($connection);
        ?>
        <div class="alert alert-success" role="alert">
            Atnaujinta! 
        </div>



        <a  href="index.php"> grįžti atgal</a>



    </body>
</html>
