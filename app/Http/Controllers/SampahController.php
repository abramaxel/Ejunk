<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sampah;

class SampahController extends Controller
{
    
    public function addSampah(Request $req)
    {
        // Membuat instance model Sampah dan mengisi properti
        $data_Sampah = new Sampah;
        $data_Sampah->nama_bank = $req->input('nama_bank');
        $data_Sampah->alamat_bank = $req->input('alamat_bank');
    
        // Mengkonversi 'kapasitas' ke bilangan bulat
        $kapasitas = intval($req->input('kapasitas'));
        $data_Sampah->kapasitas = $kapasitas;
    
        // Menyimpan data ke dalam database
        $data_Sampah->save();
    
        return redirect('/dataSampah');
    }
    
public function index()
{
    // Mengambil data Sampah dari database
    $data_Sampah = Sampah::all();

    // Menampilkan data Sampah dalam tampilan
    return view('Bank_Sampah.addSampah', compact('data_Sampah'));
}
public function editSampah(Request $req, $id)
{
    $data_Sampah = Sampah::find($id);
    

    // Validasi input
    $req->validate([
        'kapasitas' => 'required|numeric', // Pastikan 'kapasitas' tidak NULL dan berupa angka
    ]);

    // Mengisi properti model dengan data dari request
    $data_Sampah->nama_bank = $req->nama_bank;
    $data_Sampah->alamat_bank = $req->alamat_bank;
    $data_Sampah->kapasitas = $req->kapasitas;

    // Menyimpan perubahan ke database
    $data_Sampah->save();

    return redirect('/');
}

public function formEditSampah($id)
{
    $data_Sampah = Sampah::find($id);
    return view('Bank_Sampah.formEditSampah', compact('data_Sampah'));
}public function deleteSampah($id)
{
    $data_Sampah = Sampah::find($id);

    // Periksa apakah data ditemukan
    if (!$data_Sampah) {
        return redirect('/')->with('error', 'Data Sampah tidak ditemukan.');
    }

    // Hapus data Sampah
    $data_Sampah->delete();

    return redirect('/')->with('success', 'Data Sampah berhasil dihapus.');
}

}



