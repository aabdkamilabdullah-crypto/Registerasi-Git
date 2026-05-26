<?php
include 'koneksi.php';

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_users(nama, email, password) VALUE ('$nama','$nama','$password')";

    if (mysqli_query($koneksi, $sql)){
        echo "Registerasi berhasil";
    } else {
        echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registerasi</title>
</head>
<body>
    <div>
        <h2>Form registerasi</h2>
        <form action="" method="POST">
            <label>Nama</label>
            <input type="text" name="nama" requited><br>
            <label>Email</label>
            <input type="text" name="Email" requited><br>
            <label>Password</label>
            <input type="text" name="Password" requited><br>
            <button type="submit">kirim</button>
        </form>
    </div>
</body>
</html>