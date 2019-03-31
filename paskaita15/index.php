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
        session_start();
        $id = session_id(); // sesijos id isiraso i sausaini. daugiau niekas


        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        if (array_key_exists('hits', $_SESSION)) {
            $_SESSION['hits'] ++;
        } else {
            $_SESSION['hits'] = 1;
        }

        //   $i = 0;
        //   $i ++;
        // echo $i;
        //  session_destroy(); isvalo sesija pilnai
        ?>
    </body>
</html>
