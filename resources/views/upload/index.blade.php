<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Unggah File</title>
    {{-- Ini hanya styling sederhana, Anda bisa gunakan Tailwind/Bootstrap --}}
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: auto; }
        .form-upload, .file-list { border: 1px solid #ddd; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        img { max-width: 100px; height: auto; border-radius: 4px; }
        .btn-del { background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Unggah File</h1>

        {{-- Menampilkan pesan sukses atau error --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @error('file')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Form untuk Upload --}}
        <div class="form-upload">
            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="file">Pilih file untuk diunggah:</label>
                    <input type="file" id="file" name="file" required>
                </div>
                <br>
                <button type="submit">Unggah File</button>
            </form>
        </div>

        {{-- Daftar File yang Sudah Di-upload --}}
        <div class="file-list">
            <h2>Daftar File</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($files as $index => $file)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                {{-- Menampilkan gambar --}}
                               <a href="{{ asset('uploads/' . $file->storage_path) }}" target="_blank">
    <img src="{{ asset('uploads/' . $file->storage_path) }}" alt="{{ $file->original_name }}">
</a>

                            </td>
                            <td>{{ $file->original_name }}</td>
                            <td>
                                {{-- Form untuk Hapus File --}}
                                <form action="{{ route('upload.destroy', $file->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus file ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-del">del</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum ada file yang diunggah.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
