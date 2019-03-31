<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <!--    input linkai:
        https://www.w3schools.com/tags/tag_input.asp?fbclid=IwAR0UKPk-zpwkpFGurbBTVTabXZpsjW09SjKqXB0TQmVuy6k9OHXWpj-mpOI
        https://secure.php.net/manual/en/tutorial.forms.php?fbclid=IwAR03v6BhJgErmwPDFX-vur6HHP3KvrqzpRT87RjD3jrG8hI7HXp1D833vGM
        https://www.w3schools.com/php/php_forms.asp?fbclid=IwAR2-HKZv6-MfFWjlNTCawtq1KuTiEz_XWYGZA0AHvEyLpmULN41_IGQ7eP0
        https://www.w3schools.com/php/php_form_complete.asp?fbclid=IwAR0Eg2lRv8iiGAqNq8bdl2OLPUds4KwTYkvfwLNiSH13eTDjKFQurcrhNYI
        https://www.w3schools.com/php/php_form_complete.asp?fbclid=IwAR3P17dge00T31NVsewZDnOyKU5wfS1jJEavt0ZqLHx1MbTDkWxHioxxKzU
    
    -->

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="paskaita06submit.php" method="post">
            <b>Vardas:</b><br>
            <input type="text" name="name"><br>
            Gimimo metai: <br>
            <input type="number" name="birthyear"><br>
            Lytis:<br>           
            <select name="gender"> 
                <option>Vyras</option>
                <option>Moterys</option>                
            </select><br>  
            <input type="submit" value="spausti">   

        </form>
        <hr>
        <hr>

        <form action="paskaita06submit.php">
            Įveskite pirmą skaičių:<br>
            <input type="number" name="1sk"><br><br>
            Įveskite antrą skaičių:<br>
            <input type="number" name="2sk"><br><br>
            <input type="submit" value="palyginti duotus skaičius"> 

        </form>

        <hr>
        <hr>




        <form action="paskaita06submit.php" method="POST">
            Įveskite pirmą skaičių:<br>
            <input type="number" name="sk1"><br><br>
            Įveskite antrą skaičių:<br>
            <input type="number" name="sk2"><br><br>
            <input type="submit" value="pmatyti visus lyginius skaicius skaičius tarp jų"> 

        </form>

        <hr>
        <hr>







        <?php
        ?>
    </body>
</html>
