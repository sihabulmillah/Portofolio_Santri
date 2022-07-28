<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
include "function.php";
$sql = mysqli_query($conn, "SELECT * FROM jurusan");
if (isset($_POST["kirim"])) {
    tambah($_POST);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleform.css">
</head>

<body>
    <h1>Tambah Data Mahasantri</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="image">
            <div class="image-circle">
                <ul>
                    <li>
                        <div class="img1"></div>
                    </li>
                    <li>
                        <input type="file" name="gambar2">
                    </li>
                </ul>
            </div>
            <div class="image-square">
                <ul>
                    <li>
                        <div class="img-square"></div>
                    </li>
                    <li>
                        <input type="file" name="gambar1">
                    </li>
                </ul>
            </div>
            <div class="image-circle">
                <ul>
                    <li>
                        <div class="img2"></div>
                    </li>
                    <li>
                        <input type="file" name="gambar3">
                    </li>
                </ul>
            </div>
        </div>

        <div class="biodata">
            <ul>
                <li><label for="de">Nama Depan</label></li>
                <li><input type="text" name="nama1" id="de"></li>
            </ul>
            <ul>
                <li><label for="bela">Nama Belakang</label></li>
                <li><input type="text" name="nama2" id="bela"></li>
            </ul>
            <ul>
                <li><label for="tmp">Tempat Lahir</label></li>
                <li><input type="text" name="tmp_lahir" id="tmp"></li>
            </ul>
            <ul>
                <li><label for="tgl">Tanggal Lahir</label></li>
                <li><input type="date" name="tgl_lahir" id="tgl"></li>
            </ul>
            <ul>
                <li><label for="moto">Moto Hidup</label></li>
                <li><input type="text" name="moto" id="moto"></li>
            </ul>
        </div>
        <div class="about">
            <ul>
                <li>
                    <label for="about">A Bit About Me</label>
                </li>
                <li>
                    <textarea name="about" id="about" placeholder="Sekilas tentang diriku"></textarea>
                </li>
            </ul>
        </div>
        <div class="kompetensi">
            <ul>
                <li>
                    <label for="pres">Prestasi</label>
                </li>
                <li>
                    <input type="text" name="prestasi1" id="pres" placeholder="Prestasi 1">
                </li>
                <li>
                    <input type="text" name="prestasi2" id="pres" placeholder="Prestasi 2">
                </li>
                <li>
                    <input type="text" name="prestasi3" id="pres" placeholder="Prestasi 3">
                </li>

            </ul>
            <ul>
                <li>
                    <label for="or">Organisasi</label>
                </li>
                <li>
                    <input type="text" name="organisasi1" id="or" placeholder="Organisasi 1">
                </li>
                <li>
                    <input type="text" name="organisasi2" id="or" placeholder="Organisasi 2">
                </li>
                <li>
                    <input type="text" name="organisasi3" id="or" placeholder="Organisasi 3">
                </li>

            </ul>
            <ul>
                <li>
                    <label for="pro">Project</label>
                </li>
                <li>
                    <input type="text" name="project1" id="pro" placeholder="Project 1">
                </li>
                <li>
                    <input type="text" name="project2" id="pro" placeholder="Project 2">
                </li>
                <li>
                    <input type="text" name="project3" id="pro" placeholder="Project 3">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="hard">Hard Skill</label>
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="Skill 1" name="skill1" id="hard">
                    <input type="number" max="100" min="50" placeholder="Skill 2" name="skill2">
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="Skill 3" name="skill3">
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="Skill 4" name="skill4">
                    <input type="number" max="100" min="50" placeholder="MS.Office" name="office">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="soft">Soft Skill</label>
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="B.Inggris" name="bahasa" id="soft">
                    <input type="number" max="100" min="50" placeholder="Ontime" name="management">
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="Kerja Tim" name="kerjasama">
                </li>
                <li>
                    <input type="number" max="100" min="50" placeholder="PD" name="percaya_diri">
                    <input type="number" max="100" min="50" placeholder="Speaker" name="public_speaking">
                </li>
            </ul>
        </div>
        <div class="medsos">
            <ul>
                <li>
                    <label for="fb">Facebook</label>
                </li>
                <li>
                    <input type="text" name="facebook" id="fb">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="ig">Instagram</label>
                </li>
                <li>
                    <input type="text" name="instagram" id="ig">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="jus">Jurusan</label>
                </li>
                <li>
                    <select class="biodata" name="jurusan" id="jus">
                        <option hidden>==Pilih Jurusan==</option>
                        <?php foreach ($sql as $jurus) { ?>
                            <option value="<?= $jurus['id_jurusan'] ?>"><?= $jurus['nama_jurusan'] ?></option>
                        <?php } ?>
                    </select>
                </li>
            </ul>
            <ul>
                <li>
                    <label for="Gmail">Gmail</label>
                </li>
                <li>
                    <input type="text" name="gmail" id="Gmail">
                </li>
            </ul>
            <ul>
                <li>
                    <label for="in">LinkedIn</label>
                </li>
                <li>
                    <input type="text" name="linkedin" id="in">
                </li>
            </ul>
        </div>
        <div class="action">
            <button name="kirim" type="submit">Kirim</button>
    </form>
    <button><a href="dashboard.php" style="color: white; text-decoration:none;">Kembali</a></button>
    </div>
</body>

</html>