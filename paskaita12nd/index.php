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
        <h2 class="mb-5"> Automobilių CRUD</h2>
        <?php
//        [PASKAITA12] [ND]
//Sukurti automobilių crudą. Informacija apie esybę:
//Markė - tekstas
//Modelis - tekstas
//Pagaminimo metai - skaičius
//Kaina - skaičius
        //   https://gist.github.com/indruteok/0c04cd0a1bfe761a48aff227c3ea9952

        include 'config.php';
        $query = mysqli_query($connection, "SELECT * FROM `automobiliai`");
        $total = mysqli_num_rows($query); // patikrinti total galima ar nera 0 jei yra galima is esti kad nera nieko.

        if ($total <= 0) {
            echo " yrašų nėra";
        } else {
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Markė</th>
                        <th scope="col">Modelis</th>
                        <th scope="col">Pagaminimo metai</th>
                        <th scope="col">Kaina</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    while ($i < $total) {
                        $automobilisV = mysqli_fetch_assoc($query);
                        ?>
                        <tr>
                            <td><?php echo $automobilisV['id']; ?></td>
                            <td><?php echo htmlspecialchars($automobilisV['Markė']); ?></td>
                            <td><?php echo htmlspecialchars($automobilisV['Modelis']); ?></td>
                            <td><?php echo htmlspecialchars($automobilisV['pagaminimoMetai']); ?></td>
                            <td><?php echo htmlspecialchars($automobilisV['kaina']); ?></td>
                            <td><?php echo '<b><a class="text-warning"href="edit.php?id=' . $automobilisV['id'] . '" >edit</b></a>'; ?></td>
                            <td><?php echo '<b><a class="text-danger" href="delete.php?id=' . $automobilisV['id'] . '" >Delete</b></a>'; ?></td>
                            <?php
                            $i++;
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        mysqli_close($connection);
        ?>
        <div class="mt-5">
            <a class="text-success "href="create.php"> <b>Prdeti naują automobilį</b></a>
        </div>
    </body>
</html>
