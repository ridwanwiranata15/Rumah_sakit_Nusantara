@extends('layouts.style')
@section('title', 'Apoteker')
@section('table')
 <div class="main-content">
            <div class="main-content-header">
                <h1>Data Apoteker</h1>
                <div class="header-button">
                    <button>Tambah</button>
                </div>
            </div>
            <div class="main-content-body">
                <table>
                    <thead>
                        <tr>
                            <th class="apoteker-padding">Nama</th>
                            <th class="apoteker-padding">telepon</th>
                            <th class="apoteker-padding">Alamat</th>
                            <th class="apoteker-padding">Nomor str</th>
                            <th class="apoteker-padding">bergabung</th>
                            <th class="alert-message">Shif</th>
                            <th class="alert-message">Status</th>
                            <th class="alert-message">Email</th>
                            <th class="alert-message">Password</th>
                            <th class="apoteker-padding">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-id="1">
                            <td>RIdwan</td>
                            <td>Anak</td>
                            <td>10.00 - 12.00</td>
                            <td>0857-7775-0854</td>
                            <td>Anak</td>
                            <td class="alert-message">Email</td>
                            <td class="alert-message">Password</td>
                            <td class="alert-message">Password</td>
                            <td class="alert-message">Tujuh</td>
                            <td>
                                <button onclick="editApotecer(1)">Edit</button>
                                <button>Hapus</button>
                                <button onclick="DetailApotecer(1)">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
@section('modal')
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
                    <td>Nomor telepon</td>
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
                    <td>Alamat</td>
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
                    <td>Nomor Str</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td>Tanggal bergabung</td>
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
                    <td>Shift</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td></td>
                   <td></td>
                   <td class="alert-message">Email wajib di isi</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td></td>
                   <td></td>
                   <td class="alert-message">Password wajib di isi</td>
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
@endsection
@section('modal')
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
                    <td>Lokasi</td>
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
                    <td>Jadwal</td>
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
                    <td>Hari</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td>Kapasitas</td>
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
@endsection