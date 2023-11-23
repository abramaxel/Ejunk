@extends('layouts.app')

@section('title', 'Form Data Sampah')

@section('contents')

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">DATA SAMPAH</h4> <!-- Updated title -->
                <p class="card-description">Biodata</p>
                <form action="/addSampah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_bank">NAMA Bank</label>
                        <input type="text" class="form-control" name="nama_bank" placeholder="Nama Bank" />
                    </div>
                    <div class="form-group">
                        <label for="alamat_bank">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat_bank" placeholder="Alamat" required />
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">KAPASITAS</label>
                        <input type="number" class="form-control" name="kapasitas" placeholder="Kapasitas" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                
            </div>
        </div>
    </div>

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Sampah</h4> <!-- Updated title -->
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>NAMA BANK</th>
                                <th>ALAMAT BANK</th>
                                <th>KAPASITAS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_Sampah as $data)
                            <tr>
                                <td>{{ $data["nama_bank"] }}</td>
                                <td>{{ $data["alamat_bank"] }}</td>
                                <td>{{ $data["kapasitas"] }}</td>
                            
                                <td>
                                    <form action="/delete/{{ $data['idPengguna'] }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apakah Anda yakin menghapus data?');" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    <a href="/formEditSampah/{{ $data['idPengguna'] }}">
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
