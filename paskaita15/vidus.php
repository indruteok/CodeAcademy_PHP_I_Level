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

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if (null !== filter_input(INPUT_POST, 'act', FILTER_SANITIZE_STRING) && filter_input(INPUT_POST, 'act', FILTER_SANITIZE_STRING) == 'act') {
            $sql = "SELECT * FROM prisijungimas WHERE username='" . $username . "' AND password = '" . $password . "' ";
            $sql2 = "SELECT id FROM prisijungimas WHERE username='" . $username . "'  ";

            $res = mysqli_query($connection, $sql2);
            $login_result = mysqli_query($connection, $sql);

            if ($res) {
                while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                    $id = $newArray['id'];
                }
            }

            $count = mysqli_num_rows($login_result);

            if ($count == 1) {
                session_start();
                if (!isset($_SESSION['is_logged_in'])) {
                    $_SESSION['is_logged_in'] = 1;
                }
                if (!isset($_SESSION['username'])) {
                    $_SESSION['username'] = $username;
                }
                if (!isset($_SESSION['password'])) {
                    $_SESSION['password'] = $password;
                }
                if (!isset($_SESSION['id'])) {
                    $_SESSION['id'] = $id;
                }
                header("Location: http://localhost/1CodeAcademy/paskaita15/sistema.php");
            } else {
                header("Location: http://localhost/1CodeAcademy/paskaita15/prisijungimas.php");
                setcookie('wrong', 'wrong');
            }
            mysqli_close($connection);
        }
        ?>
    </body>
</html>
