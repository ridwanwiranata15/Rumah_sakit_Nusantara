<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Nusantara Hospital</title>
</head>
<body>
    <div class="card">
        <div class="card-title">
            <h2>Login</h2>
        </div>
        <div class="card-content">
            <form method="post" id="post_login" action="post-login">
                @csrf
                <table>
                 <tr>
                     <td>Email</td>
                     <td>:</td>
                     <td><input type="text" name="email"></td>
                 </tr>
                 <tr>
                     <td></td>
                    <td></td>
                    <td class="alert-message">Email wajib di isi</td>
                 </tr>
                 <tr>
                     <td>Password</td>
                     <td>:</td>
                     <td><input type="text" name="password"></td>
                 </tr>
                 <tr>
                     <td></td>
                    <td></td>
                    <td class="alert-message">Password wajib di isi</td>
                 </tr>
                </table>
             </form>
        </div>
        <div class="card-footer">
            <button id="Btn-login">Login</button>
            <p>Belum punya akun? <a href="/register">Yuk daftar</a></p>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>