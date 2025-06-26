<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Khusus</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Khusus!</h1>
    <p>Halaman ini hanya bisa diakses jika usia Anda 18 tahun atau lebih.</p>

    <hr>

    <h3>Informasi Pengguna:</h3>
    <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Role:</strong> {{ Auth::user()->role }}</p>

</body>
</html>