@extends('layouts.app')

@section('title', 'Profil')

@section('contents')
<div class="row">
    {{-- <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">DATA PENGGUNA</h4>
                <p class="card-description">Biodata</p>
                <form action="/addPengguna" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_lengkap">NAMA LENGKAP</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="nomor_telepon">NOMOR TELEPON</label>
                        <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" required />
                    </div>
                   
                    <div class="form-group">
                        <label for="alamat_email">EMAIL</label>
                        <input type="text" class="form-control" name="alamat_email" placeholder="Email" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Peta</h4>
                
            </div>
        </div>
    </div>
    
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengguna</h4>
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>NAMA LENGKAP</th>
                                <th>ALAMAT</th>
                                <th>NOMOR TELEPON</th>
                                <th>ALAMAT EMAIL</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_Pengguna as $data)
                            <tr>
                                <td>{{ $data["nama_lengkap"] }}</td>
                                <td>{{ $data["alamat"] }}</td>
                                <td>{{ $data["nomor_telepon"] }}</td>
                                <td>{{ $data["alamat_email"] }}</td>
                                <td>
                                    <form action="/delete/{{ $data['idPengguna'] }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apakah Anda yakin menghapus data?');" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    <a href="/formEditPengguna/{{ $data['idPengguna'] }}">
                                        <button type="button" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

</div>
@endsection
