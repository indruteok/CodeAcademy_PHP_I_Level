<?php
$host = "localhost"; // adresas kur duomenu baze
$user = "root";
$pass = "";  //slaptazodis
$db = "kontaktai"; // duomenu baze, prie kurios jungtis

if (array_key_exists("nuo", $_POST) && array_key_exists("iki", $_POST)) {
    $nuo = $_POST["nuo"];
    $iki = $_POST["iki"];

    $connection = mysqli_connect($host, $user, $pass, $db); // prisijungimas prie db.  isaugomas i kintamaji.
    mysqli_set_charset($connection, "utf8");  // funkcija kuri ištraukiant sutvarko lietuviškas raides.

    if (is_numeric($_POST["nuo"]) && is_numeric($_POST["iki"])) {
        $query = mysqli_query($connection, "SELECT * FROM `kontaktai` WHERE `gimimoMetai`>='$nuo' && `gimimoMetai`<='$iki'  ");  // tas sql serveris ivykdo uzklausia prie kurio prisijungiam, antaras uzklausa nurodoma
    } else if (is_numeric($_POST["nuo"])) {
        $query = mysqli_query($connection, "SELECT * FROM `kontaktai` WHERE `gimimoMetai`>='$nuo'");
    } else if (is_numeric($_POST["iki"])) {
        $query = mysqli_query($connection, "SELECT * FROM `kontaktai` WHERE `gimimoMetai`<='$iki'");
    } else {
        $query = mysqli_query($connection, "SELECT * FROM `kontaktai` ");
    }
    $total = mysqli_num_rows($query);

    $i = 0;
    while ($i < $total) {
        $telefonai = mysqli_fetch_assoc($query);
        echo "vardas: " . $telefonai['vardas'];
        echo "<br>pavarde: " . $telefonai['pavarde'];
        echo "<br>el. pastas: " . $telefonai['el.pastas'];
        echo "<br>gimimo metai: " . $telefonai['gimimoMetai'];
        echo "<hr>";
        $i++;
    }
    mysqli_close($connection);
    echo "Pagal nurodytą rėžį radome: <br>";
} else {
    echo "nepalikite tuščių reikšmių ";
}
?>
<a href="index.php"><button  type="button">Back</button></a>

