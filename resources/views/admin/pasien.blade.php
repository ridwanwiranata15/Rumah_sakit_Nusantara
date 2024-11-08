@extends('layouts.style')
@section('title', 'pasien')
@section('table')
<div class="main-content">
    <div class="main-content-header">
        <h1>Data Pasien</h1>
    </div>
    <div class="main-content-body">
        <table>
            <thead>
                <tr>
                    <th class="pasien-px">Nama</th>
                    <th class="pasien-px">Tempat lahir</th>
                    <th class="pasien-px">Tanggal lahir</th>
                    <th class="pasien-px">Jenis kelamin</th>
                    <th class="pasien-px">Alamat</th>
                    <th class="pasien-px pasien-hide">Keluhan</th>
                    <th class="pasien-px pasien-hide">Kode pendaftaraan</th>
                    <th class="pasien-px pasien-hide">Nomor whatsapp</th>
                    <th class="pasien-px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr data-id="1">
                    <td class="pasien-px">RIdwan</td>
                    <td class="pasien-px">Anak</td>
                    <td class="pasien-px">10.00 - 12.00</td>
                    <td class="pasien-px">0857-7775-0854</td>
                    <td class="pasien-px">Anak</td>
                    <td class="pasien-hide pasien-px">Email</td>
                    <td class="pasien-hide pasien-px">Password</td>
                    <td class="pasien-hide">dede</td>
                    <td class="pasien-hide">tiga</td>
                    <td class="pasien-hide">empat</td>
                    <td class="pasien-px">
                        <button onclick="editPasien(1)">Detail</button>
                        <button onclick="DaftarPasien(1)">Daftar</button>
                        <button>Daftar</button>
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
                    <td class="column">Tempat lahir</td>
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
                    <td class="column">Tanggal lahir</td>
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
                    <td class="column">Jenis kelamin</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td class="column">Alamat </td>
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
                    <td class="column">Keluhan</td>
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
                    <td class="column">Nomor pendaftaraan</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td></td>
                   <td></td>
                   <td class="alert-message">Password wajib di isi</td>
                </tr>
                <tr>
                    <td class="column">Nomor whatsapp</td>
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