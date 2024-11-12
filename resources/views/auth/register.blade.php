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
            <h2>Register</h2>
        </div>
        <div class="card-content">
            <form method="post" action="{{ route('post-register') }}" id="form-register">
                @csrf
                <table>
                    <tr>
                        <td>Nama lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Nama lengkap wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Nomor telepon</td>
                        <td>:</td>
                        <td><input type="text" name="telepon"></td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Nomor telepon wajib di isi</td>
                    </tr>
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
                     <td><input type="password" name="password"></td>
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
            <button id="btn-post">Register</button>
            <p>Sudah punya akun? <a href="/login">Yuk masuk</a></p>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script src="../js/register.js"></script>
</body>
</html>