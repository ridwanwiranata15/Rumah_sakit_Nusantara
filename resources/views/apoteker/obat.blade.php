<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/apoteker-obat.css">
    <title>Nusantara Hospital</title>
</head>
<body>
    <header>
        <div class="logosec">
            <div class="logo">Nusantara Hospital</div>
            <img src="" alt="" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <div class="searchBar">
            <input type="text" placeholder="Search">
        </div>
    </header>
    <div class="main">
        <div class="main-nav-menu">
            <div class="menu-nav-list">
                <div class="list-section">
                    <h3>Obat</h3>
                </div>
                <div class="list-section">
                    <h3>Resep obat</h3>
                </div>
            </div>
            <div class="sign-out">
                <h3>Sign out</h3>
            </div>
        </div>
        <div class="main-content">
            <div class="main-content-header">
                <h1>Data Obat</h1>
                <div class="header-button">
                    <button>Tambah</button>
                </div>
            </div>
            <div class="main-content-body">
                <table>
                    <thead>
                        <tr>
                            <th class="obat-padding">Nama</th>
                            <th class="obat-padding">Jenis</th>
                            <th class="obat-padding">deskripsi</th>
                            <th class="obat-padding">Harga</th>
                            <th class="obat-padding">Kadarluasa</th>
                            <th class="obat-padding">Dosis</th>
                            <th class="obat-padding">Efek samping</th>
                            <th class="obat-padding">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td>RIdwan</td>
                            <td>Anak</td>
                            <td>10.00 - 12.00</td>
                            <td>0857-7775-0854</td>
                            <td>Anak</td>
                            <td class="obat-padding">Email</td>
                            <td class="obat-padding">Password</td>
                            <td>
                                <button onclick="editApotekerObat(1)" class="obatEdit">Edit</button>
                                <button class="ObatHapus">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="main-content-footer">
                <p>Copyright &copy; 2024 - Nusantara Hospital</p>
            </div>
        </div>
    </div>

    <div class="modal-create">
        <div class="modal-create-content doctor">
            <div class="modal-create-content-header">
                <h1></h1>
                <span>X</span>
            </div>
            <div class="modal-create-content-body">
                <form>
                   <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Nama wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Jenis</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Spesialis wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Jadwal praktek wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td>Kadarluasa</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Kontak darurat wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Dosis</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Kontak darurat wajib di isi</td>
                    </tr>
                    <tr>
                        <td>Efek samping</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td></td>
                       <td></td>
                       <td class="alert-message">Kontak darurat wajib di isi</td>
                    </tr>
                   </table>
                </form>
            </div>
            <div class="modal-create-content-footer">
                <button id="tambah">Tambah</button>
                <button id="ubah">Ubah</button>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script src="../js/apoteker-obat.js"></script>
</body>
</html>