<?php
require 'function.php';

$mhs1 = mysqli_query($conn, "SELECT id_mahasantri,nama_depan,nama_belakang,tmp_lahir,tgl_lahir,gambar2 FROM mahasantri WHERE jurusan_id = 1 ORDER BY nama_depan ASC");
$mhs2 = mysqli_query($conn, "SELECT id_mahasantri,nama_depan,nama_belakang,tmp_lahir,tgl_lahir,gambar2 FROM mahasantri WHERE jurusan_id = 2 ORDER BY nama_depan ASC");

$rows = [];
$rows1 = [];

while ($row = mysqli_fetch_assoc($mhs1)) {
    $rows[] = $row;
}
while ($row1 = mysqli_fetch_assoc($mhs2)) {
    $rows1[] = $row1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/slide1.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid px-md-5">
            <a class="navbar-brand" href="#"><img src="img/Petik_YBM 1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Portofolio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mahasantri
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#ppl">Pengembangan Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="#psj">Pengantar Sistem Jaringan</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <a href="login.php"><button class="btn btn-outline-primary" type="submit">Admin</button></a> -->
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home3.jpg" class="d-block w-100" alt="...">
                <div class="gradient"></div>
                <div class="tulisan">
                    <p class="h1">Mahasantri PeTIK</p>
                    <p>Angkatan IX</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ppl1.jpeg" class="d-block w-100" alt="...">
                <div class="gradient"></div>
                <div class="tulisan">
                    <p class="h1">Mahasantri PeTIK</p>
                    <p class="p">Pengembangan Perangkat Lunak</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/psj1.jpeg" class="d-block w-100" alt="...">
                <div class="gradient"></div>
                <div class="tulisan">
                    <h2 class="h1">Mahasantri PeTIK</h2>
                    <p class="p">Pengantar Sistem Jaringan</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Artikel -->
    <article>
        <div class="container mt-3" align="center">
            <div class="row">
                <div class="col-12" id="ppl">
                    <h2 align="center" class="h2">Pengembangan Perangkat Lunak</h2>
                </div>
                <div class="row mt-3 body">
                    <!-- slider start -->
                    <div class="slider">
                        <div class="slides">
                            <!-- radio btn start -->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <input type="radio" name="radio-btn" id="radio5">
                            <!-- radio btn end -->
                            <!-- slide start -->
                            <div class="slidy first">
                                <div class="conten">
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[0]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[0]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[0]['nama_depan'] . " " . $rows[0]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[0]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[0]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[1]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[1]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[1]['nama_depan'] . " " . $rows[1]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[1]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[1]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[2]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[2]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[2]['nama_depan'] . " " . $rows[2]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[2]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[2]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy">
                                <div class="conten">
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[3]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[3]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[3]['nama_depan'] . " " . $rows[3]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[3]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[3]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[4]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[4]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[4]['nama_depan'] . " " . $rows[4]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[4]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[4]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[5]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[5]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[5]['nama_depan'] . " " . $rows[5]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[5]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[5]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy">
                                <div class="conten">
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[6]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[6]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[6]['nama_depan'] . " " . $rows[6]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[6]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[6]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[7]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[7]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[7]['nama_depan'] . " " . $rows[7]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[7]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[7]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[8]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[8]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[8]['nama_depan'] . " " . $rows[8]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[8]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[8]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy">
                                <div class="conten">
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[9]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[9]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[9]['nama_depan'] . " " . $rows[9]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[9]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[9]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[10]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[10]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[10]['nama_depan'] . " " . $rows[10]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[10]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[10]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[11]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[11]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[11]['nama_depan'] . " " . $rows[11]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[11]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[11]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy">
                                <div class="conten">
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[12]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[12]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[12]['nama_depan'] . " " . $rows[12]['nama_belakang'] ?></h4>
                                                <p class="card-text" style="font-size: 0.85em;"><?= $rows[12]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[12]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[13]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[13]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[13]['nama_depan'] . " " . $rows[13]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[13]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[13]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio.php?id=<?= $rows[14]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows[14]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows[14]['nama_depan'] . " " . $rows[14]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows[14]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows[14]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- slidy end -->
                            <!-- automatic nacigation start -->
                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>
                                <div class="auto-btn5"></div>
                            </div>
                            <!-- automatic navigation end -->
                        </div>
                        <!-- navigation manual start -->
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                            <label for="radio5" class="manual-btn"></label>
                        </div>
                        <!-- manual navigation end -->
                    </div>
                    <!-- slider end -->
                </div>
            </div>
        </div>
        <!-- PSJ -->
        <div class="container my-4" align="center">
            <div class="row">
                <div class="col-12" id="psj">
                    <h2 align="center" class="h2">Pengantar Sistem Jaringan</h2>
                </div>
                <div class="row mt-3 body1">
                    <!-- slider start -->
                    <div class="slider1">
                        <div class="slides1">
                            <!-- radio btn start -->
                            <input type="radio" name="radio-btn" id="radio11">
                            <input type="radio" name="radio-btn" id="radio21">
                            <input type="radio" name="radio-btn" id="radio31">
                            <input type="radio" name="radio-btn" id="radio41">
                            <input type="radio" name="radio-btn" id="radio51">
                            <!-- radio btn end -->
                            <!-- slide start -->
                            <div class="slidy1 first1">
                                <div class="conten1">
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[0]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[0]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[0]['nama_depan'] . " " . $rows1[0]['nama_belakang'] ?></h4>
                                                <p class="card-text" style="font-size: 0.85em;"><?= $rows1[0]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[0]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[1]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[1]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[1]['nama_depan'] . " " . $rows1[1]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[1]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[1]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[2]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[2]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[2]['nama_depan'] . " " . $rows1[2]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[2]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[2]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy1">
                                <div class="conten1">
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[3]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[3]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[3]['nama_depan'] . " " . $rows1[3]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[3]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[3]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[4]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[4]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[4]['nama_depan'] . " " . $rows1[4]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[4]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[4]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[5]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[5]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[5]['nama_depan'] . " " . $rows1[5]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[5]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[5]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy1">
                                <div class="conten1">
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[6]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[6]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[6]['nama_depan'] . " " . $rows1[6]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[6]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[6]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[7]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[7]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[7]['nama_depan'] . " " . $rows1[7]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[7]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[7]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[8]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[8]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[8]['nama_depan'] . " " . $rows1[8]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[8]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[8]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy1">
                                <div class="conten1">
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[9]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[9]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[9]['nama_depan'] . " " . $rows1[9]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[9]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[9]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[10]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[10]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[10]['nama_depan'] . " " . $rows1[10]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[10]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[10]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[11]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[11]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[11]['nama_depan'] . " " . $rows1[11]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[11]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[11]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slidy1">
                                <div class="conten1">
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[12]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[12]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[12]['nama_depan'] . " " . $rows1[12]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[12]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[12]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[13]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[13]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[13]['nama_depan'] . " " . $rows1[13]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[13]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[13]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="portofolio1.php?id_psj=<?= $rows1[14]['id_mahasantri'] ?>" class="card">
                                            <img class="card-img-top" src="img/photo/<?= $rows1[14]['gambar2'] ?>" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="h4"><?= $rows1[14]['nama_depan'] . " " . $rows1[14]['nama_belakang'] ?></h4>
                                                <p class="card-text"><?= $rows1[14]['tmp_lahir'] . ", " . date('d F Y', strtotime($rows1[14]['tgl_lahir'])) ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- slidy end -->
                            <!-- automatic nacigation start -->
                            <div class="navigation-auto1">
                                <div class="auto-btn11"></div>
                                <div class="auto-btn21"></div>
                                <div class="auto-btn31"></div>
                                <div class="auto-btn41"></div>
                                <div class="auto-btn51"></div>
                            </div>
                            <!-- automatic navigation end -->
                        </div>
                        <!-- navigation manual start -->
                        <div class="navigation-manual1">
                            <label for="radio11" class="manual-btn1"></label>
                            <label for="radio21" class="manual-btn1"></label>
                            <label for="radio31" class="manual-btn1"></label>
                            <label for="radio41" class="manual-btn1"></label>
                            <label for="radio51" class="manual-btn1"></label>
                        </div>
                        <!-- manual navigation end -->
                    </div>
                    <!-- slider end -->
                </div>
            </div>
        </div>
    </article>
    <!-- Akhir Artikel -->
    <footer class="mt-5">
        <div class="footer">
            <img src="img/petikputih 1.png" alt="">
            <p style="margin-top: 15px;">Copyright &copy PeTIK, All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
</body>

</html>