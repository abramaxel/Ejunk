@extends('layouts.app')
@section('title', 'Data Pengguna')

@section('contents')



<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Edit Data Pengguna</h4>
                <p class="card-description">Biodata</p>
                <form action="/formEditPengguna/{{$data_Pengguna->idPengguna}}" method="POST">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-5 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$data_Pengguna->nama_lengkap}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-5 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat" value="{{$data_Pengguna->alamat}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_telepon" class="col-sm-5 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" value="{{$data_Pengguna->nomor_telepon}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_email " class="col-sm-5 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat_email " placeholder="E-mail" value="{{$data_Pengguna->alamat_email }}" />
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="prodi" class="col-sm-3 col-form-label">PRODI</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="prodi">
                                <option value="0" selected>Pilih Program Studi</option>
                                <option value="Sistem Infromasi">Sistem Informatika</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Sistem Komputer">Sistem Komputer</option>
                            </select>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
