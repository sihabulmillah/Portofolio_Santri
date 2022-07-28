<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
require 'function.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT mahasantri.* , jurusan.* FROM mahasantri INNER JOIN jurusan on mahasantri.jurusan_id = jurusan.id_jurusan WHERE id_mahasantri = $id");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="css/style2.css" />

    <title>potfolio</title>
</head>

<body class="container">
    <?php foreach ($query as $data) { ?>
        <section class="jumbotron text-center">
            <img src="img/photo/<?= $data['gambar3'] ?>" alt="" width="90" class="rounded-circle img-thumbnail mt-4" />
            <h1 class="nama"><?= $data['nama_depan'] . " " . $data['nama_belakang'] ?></h1>

            <p class="lead text-muted"><?php echo $data['tmp_lahir'] . ", " . date('d F Y', strtotime($data['tgl_lahir'])) ?></p>
            <hr class="garis" style="margin-top: -10px;">
            <b class="nama1 text-muted"><?= $data['nama_jurusan'] ?></b>
            <div class="nama2">
                <p>Motto Hidup</p>
            </div>
            <hr class="garis">
            <div class="grid">
                <div class="mt-2">
                    <p>
                        <?= $data['motto_hidup'] ?>
                    </p>

                </div>
            </div>
        </section>
        <section class="services">
            <div class="service">
                <h3>Prestasi</h3>
                <ul>
                    <li><?= $data['prestasi1'] ?></li>
                    <li><?= $data['prestasi2'] ?></li>
                    <li><?= $data['prestasi3'] ?></li>
                </ul>
            </div>
            <div class="service">
                <h3>organisasi</h3>
                <ul>
                    <li><?= $data['organisasi1'] ?></li>
                    <li><?= $data['organisasi2'] ?></li>
                    <li><?= $data['organisasi3'] ?></li>
                </ul>
            </div>
            <div class="service">
                <h3>Project</h3>
                <ul>
                    <li><?= $data['project1'] ?></li>
                    <li><?= $data['project2'] ?></li>
                    <li><?= $data['project3'] ?></li>
                </ul>
            </div>
        </section>
        <section class="container skill">
            <p>Soft Skill</p>
            <hr class="garis">
            <div class="row mt-4">
                <div class="hardskill col-12 col-md-5">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['skill1'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <p>HTML & CSS</p><span><?= $data['skill1'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['skill2'] ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <p>DATABASE & PHP</p><span><?= $data['skill2'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['skill3'] ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <p>BOOTSTRAP</p><span><?= $data['skill3'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['skill4'] ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <p>JAVASCRITPT</p><span><?= $data['skill4'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['ms_office'] ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <p>MICROSOFT OFFICE</p><span><?= $data['ms_office'] ?>%</span>
                        </div>
                    </div>
                </div>
                <div class="softskill col-12 col-md-5 offset-md-2 col-mt-10">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['bahasa_asing'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <p>BAHASA ASING</p><span><?= $data['bahasa_asing'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['management_waktu'] ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <p>MANAGEMENT WAKTU</p><span><?= $data['management_waktu'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['kerjasama'] ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <p>KERJASAMA</p><span><?= $data['kerjasama'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['percaya_diri'] ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <p>PERCAYA DIRI</p><span><?= $data['percaya_diri'] ?>%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $data['public_speaking'] ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <p>PUBLIC SPEAKING</p><span><?= $data['public_speaking'] ?>%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <footer>
        <a href="edit.php?id=<?= $data['id_mahasantri'] ?>"><button>Edit</button></a> ||
        <a href="dashboard.php"><button>Kembali</button></a> ||
        <a href="function.php?id_hapus=<?= $data['id_mahasantri'] ?>" onclick="return confirm('Yakin ?');"><button>Hapus</button></a>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>