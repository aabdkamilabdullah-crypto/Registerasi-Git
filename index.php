<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $Nama = $_POST['Nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tb_users (nama, email, password) VALUES ('nama','$email','$password')";

  $eksekusi = mysqli_query($koneksi, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Registrasi Akun</h2>
    <form method="POST" action="">
        <label>Nama</label><br>
        <input type="text" name="Nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>
