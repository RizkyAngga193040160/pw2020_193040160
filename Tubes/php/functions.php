<?php

function koneksi()
{

  return mysqli_connect('localhost', 'root', '', 'tubes_193040160');
}

function query($query)
{

  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  //jika tidak menampilkan gambar
  if ($error == 4) {
    /*echo "<script>
        alert('pilih gambar terrlebih dahulu!');
        </script>";*/
    return '../img/nophoto.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }

  // cek ukuran file
  if ($ukuran_file > 5000000) {
    echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
    return false;
  }
  // lolos pengecekan
  //siap upload
  //Generate nama file baru

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  //upload gambar
  $foto = upload();
  if (!$foto) {
    return false;
  }
  $kategori = htmlspecialchars($data['kategori']);
  $merk = htmlspecialchars($data['merk']);
  $bahan = htmlspecialchars($data['bahan']);
  $harga = htmlspecialchars($data['harga']);
  // $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO 
                pakaian
                VALUES
                (null, '$foto','$kategori','$merk','$bahan','$harga');
                ";
  mysqli_query($conn, $query)or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id){
  $conn = koneksi();
  
  //menghapus gambar
  $payan = query("SELECT * FROM pakaian WHERE Id = $id");
  if($payan['Foto'] != 'nophoto.png'){
    unlink('../img/' . $payan['Foto']);
  }
  

  mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $foto_lama = htmlspecialchars($data['foto_lama']);
  $kategori = htmlspecialchars($data['kategori']);
  $merk = htmlspecialchars($data['merk']);
  $bahan = htmlspecialchars($data['bahan']);
  $harga = htmlspecialchars($data['harga']);
  
  if($_FILES['foto']['error'] === 4){
    $foto = $foto_lama;
  }else{
    $foto = upload();
  }

  if($foto == '../img/nophoto.png'){
    $foto = $foto_lama;
  }
  

  $query = "UPDATE pakaian SET 
              Foto = '$foto',
              Kategori = '$kategori',
              Merk = '$merk',
              Bahan = '$bahan',
              Harga = '$harga'
              WHERE Id = $id";
  mysqli_query($conn, $query)or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM pakaian
            WHERE 
            Kategori LIKE '%$keyword%' OR
            Merk LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  if($user = query("SELECT * FROM user WHERE username = '$username'")){
    if(password_verify($password, $user['password'])){

    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
  }
}
    return[
      'error' => true,
      'pesan' => "Username / Password Salah!!"
    ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  if(empty($username) || empty($password1) || empty($password2)){
    echo "<script>
          alert('username dan password tidak boleh kosong!!');
          document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  if(query("SELECT * FROM user WHERE username='$username'")){
    echo "<script>
          alert('username sudah terdaftar!!');
          document.location.href = 'registrasi.php';
          </script>";

          return false;
  }


  if($password1 !== $password2){
  echo "<script>
          alert('Konfirmasi password tidak sesuai!!');
          document.location.href = 'registrasi.php';
          </script>";

          return false;
}

  if(strlen($password1) < 5){
    echo "<script>
          alert('Password terlalu pendek!!');
          document.location.href = 'registrasi.php';
          </script>";

          return false;
  }

  $password_baru = password_hash($password1, PASSWORD_DEFAULT);

  $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
?>