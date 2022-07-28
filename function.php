<?php
session_start();
$conn = mysqli_connect("localhost", "sihab", "password", "portofolio");

$id = $_GET["id_hapus"];
hapus($id);

function hapus($id)
{
  global $conn;

  $query = mysqli_query($conn, "DELETE FROM mahasantri WHERE id_mahasantri = $id");
  if ($query) {
    header('location:dashboard.php');
  }
}

function tambah($data)
{
  global $conn;

  $nama1 = $data["nama1"];
  $nama2 = $data["nama2"];
  $tmp = $data["tmp_lahir"];
  $tgl = $data["tgl_lahir"];
  $moto = $data["moto"];
  $pres1 = $data["prestasi1"];
  $pres2 = $data["prestasi2"];
  $pres3 = $data["prestasi3"];
  $or1 = $data["organisasi1"];
  $or2 = $data["organisasi2"];
  $or3 = $data["organisasi3"];
  $pro1 = $data["project1"];
  $pro2 = $data["project2"];
  $pro3 = $data["project3"];
  $about = $data["about"];
  $ins = $data["instagram"];
  $gmail = $data["gmail"];
  $fb = $data["facebook"];
  $in = $data["linkedin"];
  $skill1 = $data["skill1"];
  $skill2 = $data["skill2"];
  $skill3 = $data["skill3"];
  $skill4 = $data["skill4"];
  $office = $data["office"];
  $asing = $data["bahasa"];
  $waktu = $data["management"];
  $kerja = $data["kerjasama"];
  $pd = $data["percaya_diri"];
  $speak = $data["public_speaking"];
  $jurus = $data["jurusan"];

  $gam1 = upload();
  if (!$gam1) {
    return false;
  }
  $gam2 = upload2();
  if (!$gam2) {
    return false;
  }
  $gam3 = upload3();
  if (!$gam3) {
    return false;
  }

  $sql = "INSERT INTO mahasantri VALUES (NULL,'$nama1','$nama2','$tmp','$tgl','$moto','$pres1','$pres2','$pres3','$or1','$or2','$or3','$gam1','$gam2','$gam3','$pro1','$pro2','$pro3','$about','$ins','$gmail','$fb','$in',$skill1,$skill2,$skill3,$skill4,$office,$asing,$waktu,$kerja,$pd,$speak,$jurus)";

  $query = mysqli_query($conn, $sql);
  if ($query) {
    header("location:dashboard.php");
  } else {
    echo mysqli_error($conn);
  }
}

function upload()
{
  $namaFile = $_FILES["gambar1"]["name"];
  $ukuranFile = $_FILES["gambar1"]["size"];
  $error = $_FILES["gambar1"]["error"];
  $tmp_name = $_FILES["gambar1"]["tmp_name"];

  if ($error === 4) {
    echo "<script>
      alert('pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }
  // mengecek apakah yang di upload adalah gambar
  $ekstensiValid = ["jpg", "jpeg", "png"];
  $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "<script>
    alert('yang anda upload bukan gambar');
  </script>";
    return false;
  }
  // membatasi ukuran gambar 
  if ($ukuranFile > 6000000) {
    echo "<script>
    alert('gambar yang anda upload terlalu besar');
  </script>";
    return false;
  }
  //generate nama baru supaya tidak ada kesamaan dalam namanya 
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  $pinah = move_uploaded_file($tmp_name, 'img/photo/' . $namaFileBaru);
  if (!$pinah) {
    echo "<script>
    alert('GAGAL PINDAH');
  </script>";
    return false;
  }


  return $namaFileBaru;
}
function upload2()
{
  $namaFile = $_FILES["gambar2"]["name"];
  $ukuranFile = $_FILES["gambar2"]["size"];
  $error = $_FILES["gambar2"]["error"];
  $tmp_name = $_FILES["gambar2"]["tmp_name"];

  if ($error === 4) {
    echo "<script>
      alert('pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }
  // mengecek apakah yang di upload adalah gambar
  $ekstensiValid = ["jpg", "jpeg", "png"];
  $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "<script>
    alert('yang anda upload bukan gambar');
  </script>";
    return false;
  }
  // membatasi ukuran gambar 
  if ($ukuranFile > 6000000) {
    echo "<script>
    alert('gambar yang anda upload terlalu besar');
  </script>";
    return false;
  }
  //generate nama baru supaya tidak ada kesamaan dalam namanya 
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  $pinah = move_uploaded_file($tmp_name, 'img/photo/' . $namaFileBaru);
  if (!$pinah) {
    echo "<script>
    alert('GAGAL PINDAH');
  </script>";
    return false;
  }
  return $namaFileBaru;
}
function upload3()
{
  $namaFile = $_FILES["gambar3"]["name"];
  $ukuranFile = $_FILES["gambar3"]["size"];
  $error = $_FILES["gambar3"]["error"];
  $tmp_name = $_FILES["gambar3"]["tmp_name"];

  if ($error === 4) {
    echo "<script>
      alert('pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }
  // mengecek apakah yang di upload adalah gambar
  $ekstensiValid = ["jpg", "jpeg", "png"];
  $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "<script>
    alert('yang anda upload bukan gambar');
  </script>";
    return false;
  }
  // membatasi ukuran gambar 
  if ($ukuranFile > 6000000) {
    echo "<script>
    alert('gambar yang anda upload terlalu besar');
  </script>";
    return false;
  }
  //generate nama baru supaya tidak ada kesamaan dalam namanya 
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  $pinah = move_uploaded_file($tmp_name, 'img/photo/' . $namaFileBaru);
  if (!$pinah) {
    echo "<script>
    alert('GAGAL PINDAH');
  </script>";
    return false;
  }
  return $namaFileBaru;
}
function edit($data)
{
  global $conn;

  $id = $data["id"];
  $nama1 = $data["nama1"];
  $nama2 = $data["nama2"];
  $tmp = $data["tmp_lahir"];
  $tgl = $data["tgl_lahir"];
  $moto = $data["moto"];
  $pres1 = $data["prestasi1"];
  $pres2 = $data["prestasi2"];
  $pres3 = $data["prestasi3"];
  $or1 = $data["organisasi1"];
  $or2 = $data["organisasi2"];
  $or3 = $data["organisasi3"];
  $pro1 = $data["project1"];
  $pro2 = $data["project2"];
  $pro3 = $data["project3"];
  $about = $data["about"];
  $ins = $data["instagram"];
  $gmail = $data["gmail"];
  $fb = $data["facebook"];
  $in = $data["linkedin"];
  $skill1 = $data["skill1"];
  $skill2 = $data["skill2"];
  $skill3 = $data["skill3"];
  $skill4 = $data["skill4"];
  $office = $data["office"];
  $asing = $data["bahasa"];
  $waktu = $data["management"];
  $kerja = $data["kerjasama"];
  $pd = $data["percaya_diri"];
  $speak = $data["public_speaking"];
  $jurus = $data["jurusan"];

  if ($_FILES['gambar1']['error'] === 4) {
    $gam1 = $data['gambarLama1'];
  } else {
    $gam1 = upload();
  }

  if ($_FILES['gambar2']['error'] === 4) {
    $gam2 = $data['gambarLama2'];
  } else {
    $gam2 = upload2();
  }

  if ($_FILES['gambar3']['error'] === 4) {
    $gam3 = $data['gambarLama3'];
  } else {
    $gam3 = upload3();
  }


  $sql = "UPDATE mahasantri SET nama_depan = '$nama1',nama_belakang = '$nama2' , tmp_lahir = '$tmp' ,tgl_lahir = '$tgl' , motto_hidup = '$moto' ,prestasi1 = '$pres1' , prestasi2 = '$pres2' ,prestasi3 = '$pres3',organisasi1 = '$or1', organisasi2 = '$or2' , organisasi3 = '$or3',gambar1 = '$gam1' , gambar2 = '$gam2' ,gambar3 = '$gam3' , project1 = '$pro1' ,project2 = '$pro2' ,project3 = '$pro3' , about = '$about' ,instagram = '$ins', gmail = '$gmail', facebook = '$fb', linkedin = '$in',skill1 = $skill1 , skill2 = $skill2 , skill3 = $skill3 , skill4 = $skill4, ms_office = $office , bahasa_asing = $asing , management_waktu = $waktu , kerjasama = $kerja , percaya_diri = $pd , public_speaking = $speak , jurusan_id = $jurus WHERE id_mahasantri = $id";

  $query = mysqli_query($conn, $sql);
  if ($query) {
    header('location:dashboard.php');
  } else {
    echo mysqli_error($conn);
  }
}

function cari($keyword)
{
  global $conn;
  $query = "SELECT mahasantri.*, jurusan.* FROM mahasantri INNER JOIN jurusan ON mahasantri.jurusan_id = jurursan.id_jurusan WHERE nama_depan LIKE  '%$keyword%' OR nama_belakang LIKE '%$keyword%' OR nama_jurusan  LIKE '%$keyword%' OR tmp_lahir LIKE '%$keyword%' ";;
  return mysqli_query($conn, $query);
}
