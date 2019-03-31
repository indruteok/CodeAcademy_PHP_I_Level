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

        class CRUD {

            public $connection;

            public function getAll() {
                //SELECT *FROM 'masinos'
            }

            public function create($make, $model, $price) {
//INSERT INTO 'masinos' SET 'marke' = '$marke,'.''                
            }

            public function validate($make, $model, $price) {
                //if
                //if
            }

        }

        $crud = new CRUD;
        $crud->connection = mysqli_connect($host, $user, $password, $database, $port, $socket);


        $crud->create("BMW", "525", 5000);
        $crud->create($_POST['make'], "525", 5000);
        ?>
    </body>
</html>
