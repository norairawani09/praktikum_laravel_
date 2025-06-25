<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Alamat</title>
</head>
<body>
    <h1>Formulir Alamat</h1>

    <p>Daftar Provinsi yang berhasil diambil dari database:</p>
    <ul>
        {{-- Ini adalah sintaks Blade untuk melakukan perulangan --}}
        @foreach ($provinsis as $provinsi)
            {{-- Menampilkan nama provinsi --}}
            
            <li>{{ $provinsi->nama }}</li>
        @endforeach
    </ul>

</body>
</html>