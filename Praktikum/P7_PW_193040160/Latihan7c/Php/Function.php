<?php
    function koneksi(){
        $conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

        mysqli_select_db($conn, "tubes_193040160") or die("Database salah!");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }


    function tambah($data)
    {
        $conn = koneksi();

        $id = htmlspecialchars($data['Id']);
        $Foto = htmlspecialchars($data['Foto']);
        $Kategori = htmlspecialchars($data['Kategori']);
        $Merk = htmlspecialchars($data['Merk']);
        $Bahan = htmlspecialchars($data['Bahan']);
        $Harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO pakaian VALUES ('', '$Foto', '$Kategori', '$Merk', '$Bahan', '$Harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM pakaian WHERE Id = $id");

        return mysqli_affected_rows($conn);
    }

    function Ubah($data)
    {
        $conn = koneksi();
        $id = htmlspecialchars($data['Id']);
        $Foto = htmlspecialchars($data['Foto']);
        $Kategori = htmlspecialchars($data['Kategori']);
        $Merk = htmlspecialchars($data['Merk']);
        $Bahan = htmlspecialchars($data['Bahan']);
        $Harga = htmlspecialchars($data['Harga']);

        $query = "UPDATE pakaian
                    SET
                    Foto = '$Foto',
                    Kategori = '$Kategori',
                    Merk = '$Merk',
                    Bahan = '$Bahan',
                    Harga = '$Harga'
                    WHERE Id = $id";

                    mysqli_query($conn, $query);
                    return mysqli_affected_rows($conn);
    }

    function registrasi($data)
    {
        $conn = koneksi();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username sudah digunakan!!');
                    </script>";
                return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
        mysqli_query($conn, $query_tambah);

        return mysqli_affected_rows($conn);
    }
?>