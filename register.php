<?php
include 'koneksi.php';

if(isset($_POST['Register'])){
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES('$username', '$password', '$nama')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silahkan login.');
        window.location='login.php';</script>";
    } else{
        echo "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="conlog">
    <h2>Register</h2>
    <form method="POST">
        <table>
        <tr>
                <td>
                    <label for="username">Masukkan Nama: </label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="username">Masukkan Username: </label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="username" placeholder="Username" required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Masukkan Password: </label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="password" placeholder="Password" required><br>
                </td>
            </tr>
             <tr>
                <td colspan='3' align='center'><input type="submit" value="Register" name="Register"></td>
                
            </tr>
        </table>
        <p> Enter Account | <a href="login.php">Login Disini</a></p>
    </form>
</div>
</body>
</html>