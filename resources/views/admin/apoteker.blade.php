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
            <div class="main-content-footer">
                <p>Copyright &copy; 2024 - Nusantara Hospital</p>
            </div>
        </div>
@endsection