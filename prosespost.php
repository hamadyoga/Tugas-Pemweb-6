<?php
    $namadepan = $_POST['firstname'];
    $namabelakang = $_POST['lastname'];
    $TTL = $_POST['Tempattgllhr'];
    $gender = $_POST['JK'];
    $jenisikan = $_POST['JenisIkan'];
    $tombol = $_POST['submit'];

    echo "<h1> Identitas Nelayan</h1>";
    echo "Nama Depan    : " .$namadepan."<br>";
    echo "Nama Belakang : " .$namabelakang."<br>";
    echo "TTL           : " .$TTL."<br>";
    echo "Jenis Kelamin : " .$gender. "<br>";
    echo "Jenis Ikan    : " .$jenisikan. "<br>";

?>