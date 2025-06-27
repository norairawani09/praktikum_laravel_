<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = File::latest()->get();
        return view('upload.index', compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // === PERUBAHAN DI SINI ===
            // Menyimpan file menggunakan disk 'uploads' yang baru kita buat.
            // Hasilnya hanya akan berupa nama file unik, bukan path lengkap.
            $fileName = $file->store('', 'uploads');

            File::create([
                'original_name' => $file->getClientOriginalName(),
                'storage_path' => $fileName, // Sekarang kita simpan nama filenya saja
            ]);

            return redirect()->route('upload.index')->with('success', 'File berhasil di-upload!');
        }

        return redirect()->route('upload.index')->with('error', 'Gagal meng-upload file.');
    }

    public function destroy(File $file)
    {
        // === PERUBAHAN DI SINI ===
        // Menghapus file dari disk 'uploads'
        Storage::disk('uploads')->delete($file->storage_path);

        $file->delete();

        return redirect()->route('upload.index')->with('success', 'File berhasil dihapus.');
    }
}
