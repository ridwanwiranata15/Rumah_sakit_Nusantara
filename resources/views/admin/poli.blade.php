@extends('layouts.style')
@section('title', "Poli")
@section('table')
<div class="main-content">
    <div class="main-content-header">
        <h1>Data Poli</h1>
        <div class="header-button">
            <button>Tambah</button>
        </div>
    </div>
    <div class="main-content-body">
        <table>
            <thead>
                <tr>
                    <th class="poli-padding">Nama</th>
                    <th class="poli-padding">Lokasi</th>
                    <th class="poli-padding">Jadwal</th>
                    <th class="poli-padding">Hari</th>
                    <th class="poli-padding">Kapasitas harian</th>
                    <th class="alert-message">Kepala poli</th>
                    <th class="alert-message">Jumlah dokter</th>
                    <th class="poli-padding">Aksi</th>
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
                    <td>
                        <button onclick="editPoli(1)">Edit</button>
                        <button>Hapus</button>
                        <button onclick="DetailPoli(1)">Detail</button>
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