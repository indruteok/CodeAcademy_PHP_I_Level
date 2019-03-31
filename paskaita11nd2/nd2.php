<?php

function filtruotiPagalIsbn() {
    $host = "localhost"; // adresas kur duomenu baze
    $user = "root";
    $pass = "";  //slaptazodis
    $db = "knygos"; // duomenu baze, prie kurios jungtis

    $isbn = $_POST["isbn"];

    $connection = mysqli_connect($host, $user, $pass, $db); // prisijungimas prie db.  isaugomas i kintamaji.
    mysqli_set_charset($connection, "utf8");  // funkcija kuri ištraukiant sutvarko lietuviškas raides.
    $query = mysqli_query($connection, "SELECT * FROM `knygos` WHERE `isbn`='$isbn'");  // tas sql serveris ivykdo uzklausia prie kurio prisijungiam, antaras uzklausa nurodoma
    $total = mysqli_num_rows($query); // funkcija, kuri patikrina kiek yra eiluciu
    //  echo $total;

    $i = 0;
    while ($i < $total) {
        $telefonai = mysqli_fetch_assoc($query);  // is uzklausos, nespausdina tai perleidziam per Fetch kad spausdintu, po viena eilute
        echo "isbn: " . $telefonai['isbn'];
        echo "<br>autorius: " . $telefonai['autorius'];
        echo "<br>pavadinimas: " . $telefonai['pavadinimas'];
        echo "<hr>";
        $i++;
    }
    mysqli_close($connection); // db uzdarymas, paduodamas prisijungimo kintamasis
}

echo "Pagal nurodytą isbn radome: <br>";

filtruotiPagalIsbn();
?>
<a href="index.php"><button  type="button">Back</button></a>

