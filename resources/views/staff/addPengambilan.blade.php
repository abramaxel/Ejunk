@extends('layouts.app')

@section('title', 'Form Pengambilan')

@section('contents')

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">DATA PENGAMBILAN</h4>
                <p class="card-description">Biodata</p>
                <form action="/addPengambilan" method="POST" enctype="multipart/form-data">
                    @csrf
               
                    
                    <div class="form-group">
                        <label for="id_pengambilan">ID PENGAMBILAN</label>
                        <input type="text" class="form-control" name="id_pengambilan" placeholder="ID PENGAMBILAN" />
                    </div>
                    <div class="form-group">
                        <label for="tanggal">TANGGAL</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="TANGGAL" required />
                    </div>
                    
                    <div class="form-group">
                        <label for="waktu">WAKTU</label>
                        <input type="time" class="form-control" name="waktu" placeholder="WAKTU" required />
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengambilan</h4>
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>ID PENGAMBILAN</th>
                                <th>TANGGAL</th>
                                <th>WAKTU</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_pengambilan as $data)
                            <tr>
                                <td>{{ $data["id_pengambilan"] }}</td>
                                <td>{{ $data["tanggal"] }}</td>
                                <td>{{ $data["waktu"] }}</td>
                               
                                <td>
                                    <form action="/delete/{{ $data['id_pengambilan'] }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Apakah Anda yakin menghapus data?');" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    <a href="/formEditPengambilan/{{ $data['id_pengambilan'] }}">
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
