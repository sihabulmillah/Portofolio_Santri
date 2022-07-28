<?php
include 'function.php';
$id = $_GET['id_psj'];
$query = mysqli_query($conn, "SELECT mahasantri.* , jurusan.* FROM mahasantri INNER JOIN jurusan on mahasantri.jurusan_id = jurusan.id_jurusan WHERE id_mahasantri = $id");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Mahasantri</title>
    <!-- Style Bootstraap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <style>
        .moto span::after {
            background-image: url(img/born\ 1.png);
        }

        .prestasi h1::before {
            background-image: url(img/medal\ 1.png);
        }

        .organisasi h1::before {
            background-image: url(img/people\ 1.png);
        }

        .project h1::before {
            background-image: url(img/briefing\ 1.png);
        }
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light py-2" id="home">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/Petik_YBM 1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                    <a class="nav-item nav-link" aria-current="page" href="landingpage.php">Home</a>
                    <a class="nav-item nav-link" href="#about">About Me</a>
                    <a class="nav-item nav-link" href="#skill">MySkill</a>
                </div>
            </div>
        </div>
    </nav>
    <?php foreach ($query as $data) { ?>
        <!-- Akhir navigasi -->
        <div class="container hiro" style="background-color: #EAFBFF;">
            <div class="row">
                <div class="col-5 col-md-4">
                    <div class="nama">
                        <h1><?= $data['nama_depan'] ?><br><?= $data['nama_belakang'] ?></h1>
                        <p><?= $data['nama_jurusan'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 offset-md-4 col-5 offset-7">
                    <div class="moto">
                        <span><?= $data['tmp_lahir'] . ", " . date('d F Y', strtotime($data['tgl_lahir'])) ?></span>
                        <h3>Motto<p>“<?= $data['motto_hidup'] ?>”</p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-5 offset-md-3 col-2 offset-3">
                    <div class="elips1"></div>
                    <div class="elips2"></div>
                    <div class="elips3"></div>
                    <img src="img/photo/<?= $data['gambar1'] ?>" class="img"></img>
                </div>
            </div>
        </div>
        <!-- Akhir Hiro -->

        <!-- Main -->
        <div class="container-fluid main ">
            <div class=" container">
                <div class="row">
                    <div class="col-6">
                        <div class="about text-wrap">
                            <h2>A Bit About Me</h2>
                            <p><?= $data['about'] ?>
                            </p>
                            <button class="btn btn-sm btn-md btn-primary rounded-pill">Selengkapnya</button>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-5 col-5 offset-6">
                        <div class="prestasi" id="about">
                            <h1>Prestasi</h1>
                            <ul style="text-align: left;">
                                <li><?= $data['prestasi1'] ?></li>
                                <li><?= $data['prestasi2'] ?></li>
                                <li><?= $data['prestasi3'] ?></li>
                                <li style="list-style: none;"><a href="" style="text-decoration: none;">Selengkapnya...</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-5 col-5 offset-7 ">
                        <div class="organisasi">
                            <h1>Organisasi</h1>
                            <ul style="text-align: left;">
                                <li><?= $data['organisasi1'] ?></li>
                                <li><?= $data['organisasi2'] ?></li>
                                <li><?= $data['organisasi3'] ?></li>
                                <li style="list-style: none;"><a href="" style="text-decoration: none;">Selengkapnya...</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-8 col-6">
                        <div class="project">
                            <h1>Project</h1>
                            <ul style="text-align: left;">
                                <li><?= $data['project1'] ?></li>
                                <li><?= $data['project2'] ?></li>
                                <li><?= $data['project3'] ?></li>
                                <li style="list-style: none;"><a href="" style="text-decoration: none;">Selengkapnya...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Main -->
        <!-- Progres -->
        <div class="container-fluid skill" id="skill">
            <div class="container">
                <h1>LIFESKILL</h1>
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
                <div class="row">
                    <div class="col-12 col-md-5 ">
                        <!-- bar kiri -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="transition:1s; width:<?= $data['skill1'] ?>%; background-color: rgba(134, 53, 53, 1);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Mikrotik <span><?= $data['skill1'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['skill2'] ?>%;background-color: rgba(53, 134, 61, 1);" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Otomatisasi Server <span><?= $data['skill2'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['skill3'] ?>%;background-color: rgba(132, 53, 134, 1);" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Pengantar Jaringan <span><?= $data['skill3'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['skill4'] ?>%;background-color: rgba(143, 153, 26, 1);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Cloud Computing <span><?= $data['skill4'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['ms_office'] ?>%;background-color: rgba(53, 85, 134, 1);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">MICROSOFT OFFICE <span><?= $data['ms_office'] ?>%</span></div>
                        </div>
                        <!-- Bar Kanan -->
                    </div>
                    <div class="col-12 col-md-5 offset-md-2">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['bahasa_asing'] ?>%;background-color: rgba(134, 92, 53, 1);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">BAHASA ASING <span><?= $data['bahasa_asing'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['management_waktu'] ?>%;background-color: rgba(153, 194, 36, 1);" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">MANAGEMEN WAKTU <span><?= $data['management_waktu'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['kerjasama'] ?>%;background-color: rgba(103, 84, 216, 1);" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">KERJASAMA <span><?= $data['kerjasama'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width:<?= $data['percaya_diri'] ?>%;background-color: rgba(115, 94, 94, 1);" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">PERCAYA DIRI <span><?= $data['percaya_diri'] ?>%</span></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width:<?= $data['public_speaking'] ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">PUBLIC SPEAKING <span><?= $data['public_speaking'] ?>%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Progres -->
        <div class="container footer">
            <h3>Selengkapnya :</h3>
            <div class="medsos">
                <a href="" target="_blank">
                    <img src="img/linkedin (1) 1.png" alt="">
                    <figcaption>LinkedIn</figcaption>
                </a>
                <a href="" target="_blank">
                    <img src="img/instagram 1.png" alt="">
                    <figcaption style="margin-top: 12px;">Instagram</figcaption>
                </a>
                <a href="" target="_blank">
                    <img src="img/facebook 1.png" alt="">
                    <figcaption style="margin-top: 14px;">Facebook</figcaption>
                </a>
                <a href="" target="_blank">
                    <img src="img/telegram 1.png" alt="">
                    <figcaption style="margin-top: 14px;">Telegram</figcaption>
                </a>
            </div>
            <footer>Copyright &copy 2022 - Pesantren PeTIK All Rights Reserved,</footer>
        </div>
        </div>
        <script src="js/bootstrap.js"></script>
    <?php } ?>
</body>

</html>