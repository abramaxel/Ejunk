<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengambilan;

class PengambilanController extends Controller
{
    
    public function addPengambilan(Request $req)
    {
        $data_pengambilan = new Pengambilan;
        $data_pengambilan->id_pengambilan = $req->id_pengambilan;
        $data_pengambilan->tanggal = $req->tanggal;
        $data_pengambilan->waktu = $req->waktu;
        $data_pengambilan->save();
        return redirect('/dataPengambilan');

        
        
        
    }
    public function index()
    {
        // Proses data jika perlu
    $data_pengambilan = Pengambilan::all();

    // Tampilkan data pengguna dalam tampilan
    return view('Jadwal_Pengambilan.addPengambilan', compact('data_pengambilan'));
    

    }
    public function formEditPengambilan($id_pengambilan)
    {
        $data_pengambilan = Pengambilan::find($id_pengambilan);
        return view('Jadwal_Pengambilan.formEditPengambilan', compact('data_pengambilan'));
    }
    public function editPengambilan(Request $req, $id_pengambilan)
    {
        $data_pengambilan = Pengambilan::find($id_pengambilan);
        $data_pengambilan->id_pengambilan = $req->id_pengambilan;
        $data_pengambilan->tanggal = $req->tanggal;
        $data_pengambilan->waktu = $req->waktu;
        $data_pengambilan->save();
        return redirect('/');
    }

    public function deletePengambilan($id_pengambilan){
        // Menggunakan metode 'where' untuk mencocokkan kolom 'id_pengambilan' dengan nilai $id_pengambilan
        $data_pengambilan = Pengambilan::where('id_pengambilan', $id_pengambilan)->delete();
        
        // Periksa apakah data berhasil dihapus
        if ($data_pengambilan) {
            return redirect("/")->with('success', 'Data berhasil dihapus');
        } else {
            return redirect("/")->with('error', 'Data tidak ditemukan atau gagal dihapus');
        }
    }
    

    }
    

    


