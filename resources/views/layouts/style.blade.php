<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partial.style')
    <title>@yield('title')</title>
</head>
<body>
    @include('partial.header')
    <div class="main">
        @include('partial.sidebar')
        <div class="main-content">
           
            {{-- <div class="main-content-body">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Spesialis</th>
                            <th>Jadwal praktek</th>
                            <th>Kontak darurat</th>
                            <th>Poli</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>RIdwan</td>
                            <td>Anak</td>
                            <td>10.00 - 12.00</td>
                            <td>0857-7775-0854</td>
                            <td>Anak</td>
                            <td>
                                <button onclick="edit(1)">Edit</button>
                                <button>Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            @yield('table')
            <div class="main-content-footer">
                <p>Copyright &copy; 2024 - Nusantara Hospital</p>
            </div>
        </div>
    </div>

    @yield('modal')
    @include('partial.script')
</body>
</html>