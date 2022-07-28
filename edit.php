<?php
session_start();
if (!isset($_SESSION["login"])) {
   header("location:login.php");
   exit;
}
include "function.php";
$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM mahasantri WHERE id_mahasantri = $id");

$sql = mysqli_query($conn, "SELECT * FROM jurusan");

if (isset($_POST['kirim'])) {
   edit($_POST);
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
   <h1>Edit Data Mahasantri</h1>
   <form action="" method="post" enctype="multipart/form-data">
      <?php foreach ($query as $data) { ?>
         <input type="hidden" name="id" value="<?= $data['id_mahasantri'] ?>">
         <input type="hidden" name="gambarLama1" value="<?= $data['gambar1'] ?>">
         <input type="hidden" name="gambarLama2" value="<?= $data['gambar2'] ?>">
         <input type="hidden" name="gambarLama3" value="<?= $data['gambar3'] ?>">
         <div class="image">
            <div class="image-circle">
               <ul>
                  <li>
                     <img src="img/photo/<?= $data["gambar2"] ?>" alt="" class="img1">
                  </li>
                  <li>
                     <input type="file" name="gambar2">
                  </li>
               </ul>
            </div>
            <div class="image-square">
               <ul>
                  <li>
                     <img src="img/photo/<?= $data["gambar1"] ?>" alt="" class="img-square">
                  </li>
                  <li>
                     <input type="file" name="gambar1">
                  </li>
               </ul>
            </div>
            <div class="image-circle">
               <ul>
                  <li>
                     <img src="img/photo/<?= $data["gambar3"] ?>" alt="" class="img2">
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
               <li><input type="text" value="<?= $data['nama_depan'] ?>" name="nama1" id="de"></li>
            </ul>
            <ul>
               <li><label for="bela">Nama Belakang</label></li>
               <li><input type="text" value="<?= $data['nama_belakang'] ?>" name="nama2" id="bela"></li>
            </ul>
            <ul>
               <li><label for="tmp">Tempat Lahir</label></li>
               <li><input type="text" value="<?= $data['tmp_lahir'] ?>" name="tmp_lahir" id="tmp"></li>
            </ul>
            <ul>
               <li><label for="tgl">Tanggal Lahir</label></li>
               <li><input type="date" value="<?= $data['tgl_lahir'] ?>" name="tgl_lahir" id="tgl"></li>
            </ul>
            <ul>
               <li><label for="moto">Moto Hidup</label></li>
               <li><input type="text" value="<?= $data['motto_hidup'] ?>" name="moto" id="moto"></li>
            </ul>
         </div>
         <div class="about">
            <ul>
               <li>
                  <label for="about">A Bit About Me</label>
               </li>
               <li>
                  <textarea name="about" id="about" placeholder="Sekilas tentang diriku"><?= $data['about'] ?></textarea>
               </li>
            </ul>
         </div>
         <div class="kompetensi">
            <ul>
               <li>
                  <label for="pres">Prestasi</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['prestasi1'] ?>" name="prestasi1" id="pres" placeholder="Prestasi 1">
               </li>
               <li>
                  <input type="text" value="<?= $data['prestasi2'] ?>" name="prestasi2" id="pres" placeholder="Prestasi 2">
               </li>
               <li>
                  <input type="text" value="<?= $data['prestasi3'] ?>" name="prestasi3" id="pres" placeholder="Prestasi 3">
               </li>

            </ul>
            <ul>
               <li>
                  <label for="or">Organisasi</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['organisasi1'] ?>" name="organisasi1" id="or" placeholder="Organisasi 1">
               </li>
               <li>
                  <input type="text" value="<?= $data['organisasi2'] ?>" name="organisasi2" id="or" placeholder="Organisasi 2">
               </li>
               <li>
                  <input type="text" value="<?= $data['organisasi3'] ?>" name="organisasi3" id="or" placeholder="Organisasi 3">
               </li>

            </ul>
            <ul>
               <li>
                  <label for="pro">Project</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['project1'] ?>" name="project1" id="pro" placeholder="Project 1">
               </li>
               <li>
                  <input type="text" value="<?= $data['project2'] ?>" name="project2" id="pro" placeholder="Project 2">
               </li>
               <li>
                  <input type="text" value="<?= $data['project3'] ?>" name="project3" id="pro" placeholder="Project 3">
               </li>
            </ul>
            <ul>
               <li>
                  <label for="hard">Hard Skill</label>
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="Skill 1" value="<?= $data['skill1'] ?>" name="skill1" id="hard">
                  <input type="number" max="100" min="50" placeholder="Skill 2" value="<?= $data['skill2'] ?>" name="skill2">
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="MS.Office" value="<?= $data['ms_office'] ?>" name="office">
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="Skill 4" value="<?= $data['skill4'] ?>" name="skill4">
                  <input type="number" max="100" min="50" placeholder="Skill 3" value="<?= $data['skill3'] ?>" name="skill3">
               </li>
            </ul>
            <ul>
               <li>
                  <label for="soft">Soft Skill</label>
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="B.Inggris" value="<?= $data['bahasa_asing'] ?>" name="bahasa" id="soft">
                  <input type="number" max="100" min="50" placeholder="Ontime" value="<?= $data['management_waktu'] ?>" name="management">
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="Kerja Tim" value="<?= $data['kerjasama'] ?>" name="kerjasama">
               </li>
               <li>
                  <input type="number" max="100" min="50" placeholder="PD" value="<?= $data['percaya_diri'] ?>" name="percaya_diri">
                  <input type="number" max="100" min="50" placeholder="Speaker" value="<?= $data['public_speaking'] ?>" name="public_speaking">
               </li>
            </ul>
         </div>
         <div class="medsos">
            <ul>
               <li>
                  <label for="fb">Facebook</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['facebook'] ?>" name="facebook" id="fb">
               </li>
            </ul>
            <ul>
               <li>
                  <label for="ig">Instagram</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['instagram'] ?>" name="instagram" id="ig">
               </li>
            </ul>
            <ul>
               <li>
                  <label for="jus">Jurusan</label>
               </li>
               <li>
                  <select class="biodata" style="width: 200px; height: 30px;" name="jurusan" id="jus">
                     <option hidden>==Pilih==</option>
                     <?php foreach ($sql as $jurus) { ?>
                        <option value="<?= $jurus['id_jurusan'] ?>" <?php if ($data["jurusan_id"] == $jurus["id_jurusan"]) {
                                                                        echo "selected";
                                                                     } ?>><?= $jurus['nama_jurusan'] ?></option>
                     <?php } ?>
                  </select>
               </li>
            </ul>
            <ul>
               <li>
                  <label for="Gmail">Gmail</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['gmail'] ?>" name="gmail" id="Gmail">
               </li>
            </ul>
            <ul>
               <li>
                  <label for="in">LinkedIn</label>
               </li>
               <li>
                  <input type="text" value="<?= $data['linkedin'] ?>" name="linkedin" id="in">
               </li>
            </ul>
         </div>
         <div class="action">
            <button name="kirim" type="submit">Kirim</button>
   </form>
   <button><a href="dashboard.php" style="color: white; text-decoration:none;">Kembali</a></button>
   </div>
<?php } ?>
</body>

</html>