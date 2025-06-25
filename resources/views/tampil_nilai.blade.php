<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Nilai Mahasiswa</title>
    <style>
        /* Sedikit gaya agar tampilan lebih rapi */
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px; 
            background-color: #f9f9f9;
        }
        .container { 
            background-color: #fff;
            border: 1px solid #ddd; 
            padding: 20px; 
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
        h1 { 
            color: #333; 
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        h2 {
            color: #555;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 8px;
            border-bottom: 1px solid #f0f0f0;
        }
        strong {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">

        {{-- Ini adalah cara Blade (template engine Laravel) untuk melakukan pengecekan --}}
        @if ($mahasiswa)

            {{-- Jika data mahasiswa ditemukan, tampilkan ini --}}
            <h1>Detail Nilai Mahasiswa</h1>
            <h2>Nama: {{ $mahasiswa->nama }}</h2>

            <h3>Daftar Nilai:</h3>
            <ul>
                {{-- Loop untuk setiap nilai yang dimiliki mahasiswa --}}
                @forelse ($mahasiswa->nilais as $nilai)
                    <li>
                        <strong>{{ $nilai->matakuliah->nama }}:</strong> {{ $nilai->nilai }}
                    </li>
                @empty
                    {{-- Tampilkan ini jika mahasiswa ada tapi belum punya nilai --}}
                    <li>Mahasiswa ini belum memiliki data nilai.</li>
                @endforelse
            </ul>

        @else

            {{-- Jika data mahasiswa TIDAK ditemukan, tampilkan ini --}}
            <h1>Data Tidak Ditemukan</h1>
            <p>Mahasiswa dengan ID yang Anda cari tidak ada di dalam database.</p>

        @endif

    </div>

</body>
</html>