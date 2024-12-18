<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/dokter-pemeriksaan.css">
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
        <div class="main-content">
            <div class="main-content-body">
                <table>
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Tanggal pemeriksaan</th>
                            <th>Tindakan medis</th>
                            <th>Resep obat</th>
                            <th>Catatan dokter</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td>RIdwan</td>
                            <td>Anak</td>
                            <td>10.00 - 12.00</td>
                            <td>0857-7775-0854</td>
                            <td>Anak</td>
                            <td>
                                <button onclick="pemeriksaan(1)" class="pemeriksaan">Mulai pemeriksaan</button>
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
                        <td>Tanggal pemeriksaan</td>
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
                        <td>Tindakan medis</td>
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
                        <td>Resep obat</td>
                        <td>:</td>
                        <td>
                            <select name="" id="">
                                <option value="">Pilih obat</option>
                            </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Catatan dokter</td>
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
                <button>Kirim resep obat</button>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script>
    <script src="../js/dokter-pemeriksaan.js"></script>
</body>
</html>