<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
require 'function.php';
$query = mysqli_query($conn, "SELECT mahasantri.* , jurusan.* FROM mahasantri INNER JOIN jurusan on mahasantri.jurusan_id = jurusan.id_jurusan ORDER BY id_mahasantri ASC ");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/styledash.css">
</head>

<body>

    <aside class="kanan">
        <div class="title">
            <h1>Daftar Mahasantri PeTIK</h1>
            <h1 id="angkatan">Angkatan IX</h1>
        </div>
        <div class="container" id="data">
            <div class="field">
                <h3>Nama</h3>
                <h3 id="born">Tempat, Tanggal Lahir</h3>
                <h3>Motto Hidup</h3>
            </div>
            <div class="content">
                <div class="date">
                    <?php foreach ($query as $data) { ?>
                        <a href="data.php?id=<?= $data['id_mahasantri'] ?>" style="text-decoration: none;" class="data">
                            <img src="img/photo/<?= $data['gambar3'] ?>" alt="">
                            <div class="name">
                                <p id="nama">
                                    <?= $data['nama_depan'] . " " . $data['nama_belakang'] ?>
                                </p>
                                <p id="jurusan">
                                    <?= $data['nama_jurusan'] ?>
                                </p>
                            </div>
                            <p align="center" id="ttl"><?= $data['tmp_lahir'] . ", " . date('d F Y', strtotime($data['tgl_lahir'])) ?>
                            </p>
                            <p id="motto">
                                <?= $data['motto_hidup'] ?>
                            </p>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </aside>
    <aside class="kiri">
        <img src="img/Petik_YBM 1.png" id="petik">
        <hr color="#BFDBE1" id="line">
        <div class="kiri1">
            <a href="tambah_data.php" class="add">
                <img src="img/person_add.svg" alt="">
                <h3>Add Data</h3>
            </a>
            <a href="#data" class="edit">
                <img src="img/edit.svg" alt="">
                <h3>Edit Data</h3>
            </a>
            <a href="#data" class="delete">
                <img src="img/person_remove.svg" alt="">
                <h3>Delete Data</h3>
            </a>
        </div>
        <a href="logout.php
  " style="text-decoration: none; color:black">
            <div class="home">
                <img src="img/home.svg" alt="">
                <h2>Home</h2>
            </div>
        </a>
    </aside>
</body>

</html>