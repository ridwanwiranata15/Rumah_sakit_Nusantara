@extends('layouts.style')
@section('title', 'Dokter')
@section('table')
<div class="main-content">
    <div class="main-content-header">
        <h1>Data Dokter</h1>
        <div class="header-button">
            <button>Tambah</button>
        </div>
    </div>
    <div class="main-content-body">
        <table>
            <thead>
                <tr>
                    <th class="doctor-padding">Nama</th>
                    <th class="doctor-padding">Spesialis</th>
                    <th class="doctor-padding">Jadwal praktek</th>
                    <th class="doctor-padding">Kontak darurat</th>
                    <th class="doctor-padding">Poli</th>
                    <th class="alert-message">Email</th>
                    <th class="alert-message">Password</th>
                    <th class="doctor-padding">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr data-id="1">
                    <td class="doctor-padding">RIdwan</td>
                    <td class="doctor-padding">Anak</td>
                    <td class="doctor-padding">10.00 - 12.00</td>
                    <td class="doctor-padding">0857-7775-0854</td>
                    <td class="doctor-padding">Anak</td>
                    <td class="alert-message">Email</td>
                    <td class="alert-message">Password</td>
                    <td class="doctor-padding">
                        <button onclick="editDoctor(1)">Edit</button>
                        <button>Hapus</button>
                        <button onclick="DetailDoctor(1)">Detail</button>
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
                    <td>Spesialis</td>
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
                    <td>Jadwal praktek</td>
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
                    <td>Kontak darurat</td>
                    <td>:</td>
                    <td><input type="text"></td>
                    <td class="detail">detail</td>
                </tr>
                <tr>
                    <td>Poli</td>
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
                    <td>Email</td>
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