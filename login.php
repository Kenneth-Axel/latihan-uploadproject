<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- pengelompokan -->
<div class="conlog"> 
    <h2>Login</h2>
    <form method="POST">
        <table>
        <tr>
        
            <tr>
                <td>
                    <label for="username">Masukkan Username</label>
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
                    <label for="password">Masukkan Password</label>
                </td>
                <td>
                <label>:</label>
                </td>
                <td>
                    <input type="text" name="password" placeholder="Password" required><br>
                </td>
            </tr>
            <tr>
                <td colspan='3' align='center'><input type="submit" value="Login" name="Login"></td>
                
            </tr>
        </table>
       
         <p> Create Account | <a href="register.php">Daftar Disini</a></p>
    </form>
   
</div>
</body>
</html>