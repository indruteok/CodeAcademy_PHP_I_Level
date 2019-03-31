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

        function connect() {
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "php";
            $conn = mysqli_connect($host, $user, $pass, $db);
            mysqli_set_charset($conn, "utf8"); // put your code here
            return $conn;
        }

        $connection = connect();

        class CRUD {

            public $conn;

            public function getAll() {
                $query = mysqli_query($this->conn, "SELECT * FROM `anekdotai`");
                $total = mysqli_num_rows($query);

                $i = 0;
                while ($i < $total) {
                    $ankekdotaiVisi = mysqli_fetch_assoc($query);
                    echo "<br>ID: " . $ankekdotaiVisi['id'];
                    echo "<br>anekdotas: " . htmlspecialchars($ankekdotaiVisi['anekdotas']);  // nuo xss atakos - htmlspecialchars - nevykdo o rodo visus html tagus. kad ivedant vartotojas neivestu html zymiu/scripto
                    echo "<br>kategorija: " . htmlspecialchars($ankekdotaiVisi['kategorija']);
                    echo "<br> reitingas" . htmlspecialchars($ankekdotaiVisi['reitingas']);
                    echo '<br><a href="delete.php?id=' . $ankekdotaiVisi['id'] . '" >Delete</a>';
                    echo '<br><a href="edit.php?id=' . $ankekdotaiVisi['id'] . '" >edit</a>';
                    echo "<hr>";
                    $i++;
                }
                mysqli_close($this->conn);
            }

            public function getEdit($id) {
                $id = $id;
                $query = mysqli_query($this->conn, "SELECT * FROM  `anekdotai` WHERE `id` = '" . $id . "'");
                $ankekdotaiVisi = mysqli_fetch_array($query);
                mysqli_close($this->conn);
                return $ankekdotaiVisi;
            }

            public function create($turinys, $kategorija, $reitingas) {
                $turinys = addslashes($turinys);  // aPSAUGA NUO INJEKCIJU, kad kabuciu  neskaitytu. dirbant su duomabze butina !!
                $kategorija = addslashes($kategorija);
                $reitingas = addslashes($reitingas);
                $query = mysqli_query($this->conn, "INSERT INTO `anekdotai` SET `anekdotas` = '" . $turinys . "', "
                        . "`kategorija`='" . $kategorija . "', "
                        . "`reitingas`='" . $reitingas . "'");
                mysqli_close($this->conn);
            }

            public function update($id, $turinys, $kategorija, $reitingas) {
                $id = addslashes($id);
                $marke = addslashes($turinys);  // aPSAUGA NUO INJEKCIJU, kad kabuciu  neskaitytu. dirbant su duomabze butina !!
                $kategorija = addslashes($kategorija);
                $reitingas = addslashes($reitingas);

                $query = mysqli_query($this->conn, "UPDATE `anekdotai` SET `anekdotas` = '" . $marke . "', "
                        . "`kategorija`='" . $kategorija . "', "
                        . "`reitingas`='" . $reitingas . "'"
                        . "WHERE `id` = '" . $id . "' ");
                mysqli_close($this->conn);
            }

            public function validateReitingas($reitingas) {
                if (is_numeric($reitingas)) {
                    if ($reitingas >= 1 && $reitingas <= 10) {
                        
                    } else {
                        echo " reitingas turi būti skaičius nuo 1 iki 10";
                    }
                } else {
                    echo " reitingas turi būti skaičius nuo 1 iki 10";
                }
            }

            public function delete($id) {
                $id = addslashes($id);
                $query = mysqli_query($this->conn, "DELETE FROM `anekdotai` WHERE `id` = '" . $id . "'");
                mysqli_close($this->conn);
            }

        }

        $crud = new CRUD;
        $crud->conn = $connection;
        ?>
    </body>
</html>
