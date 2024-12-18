<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/apoteker-resep-obat.css">
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
                            <th class="resep-obat-padding">Nama Obat</th>
                            <th class="resep-obat-padding">Jumlah</th>
                            <th class="resep-obat-padding">Dosis</th>
                            <th class="resep-obat-padding">Instruktur</th>
                            <th class="resep-obat-padding">Tanggal resep</th>
                            <th class="resep-obat-padding">Keterangan</th>
                            <th class="resep-obat-padding">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td>RIdwan</td>
                            <td>Anak</td>
                            <td>10.00 - 12.00</td>
                            <td>0857-7775-0854</td>
                            <td>Anak</td>
                            <td class="resep-obat-padding">Email</td>
                            <td class="resep-obat-padding">Password</td>
                            <td>
                                <button onclick="editApotekerResepObat(1)" class="ResepUbah">Edit</button>
                                <button class="ResepHapus">Hapus</button>
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
                        <td>Nama Obat</td>
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
                        <td>Jumlah</td>
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
                        <td>Dosis</td>
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
                        <td>Instruktur</td>
                        <td>:</td>
                        <td><input type="text"></td>
                        <td class="detail">detail</td>
                    </tr>
                    <tr>
                        <td>Tanggal resep</td>
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
                        <td>Keterangan</td>
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
                <button id="tambah" >Tambah</button>
                <button id="ubah">Ubah</button>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script src="../js/apoteker-resep-obat.js"></script>
</body>
</html>