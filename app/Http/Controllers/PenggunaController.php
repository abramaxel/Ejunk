<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\User;

class PenggunaController extends Controller
{
    
    public function index()
    {
        $user = auth()->user();

        // Fetch data for the logged-in user based on a unique identifier (e.g., email)
        $data_Pengguna = Pengguna::where('alamat_email', $user->email)->get();

        // Pass the data to the view
        return view('pengguna.addPengguna', compact('data_Pengguna'));
    }
    
    public function deletePengguna($idPengguna)
    {
        // Tambahkan dd() untuk debugging
        //dd($idPengguna);
    
        $pengguna = Pengguna::find($idPengguna);
    
        // Tambahkan dd() untuk debugging
        //dd($pengguna);
    
        if ($pengguna) {
            // Hapus data dari tabel 'penggunas'
            $pengguna->delete();
    
            // Hapus data dari tabel 'users'
            $user = User::where('nama', $pengguna->nama_lengkap)->first();
            if ($user) {
                $user->delete();
            }
    
            return redirect("/")->with('success', 'Akun berhasil dihapus');
        } else {
            return redirect("/dataPengguna")->with('error', 'Akun tidak ditemukan');
        }
    }
    

    public function formEditPengguna($idPengguna)
    {
        $data_Pengguna = Pengguna::find($idPengguna);
        return view('Pengguna.formEditPengguna', compact('data_Pengguna'));
    }
    
    public function peta()
    {
        return view('Pengguna.peta');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}


