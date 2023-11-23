@extends('layouts.app')

@section('title', 'Form Data Sampah')

@section('contents')


<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Edit Data Kelompok</h4>
                <p class="card-description">Biodata</p>
                <form action="/editSampah/{{$data_Sampah->id}}" method="POST">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="nama_bank" class="col-sm-3 col-form-label">NAMA BANK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_bank" value="{{$data_Sampah->nama_bank}}" />
                        </div>
                    
                    </div>
                    <div class="form-group row">
                        <label for="alamat_bank" class="col-sm-3 col-form-label">ALAMAT BANK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat_bank" placeholder="ALAMAT" value="{{$data_Sampah->alamat_bank}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kapasitas" class="col-sm-3 col-form-label">KAPASITAS</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="number" placeholder="kapasitas" value="{{$data_Sampah->kapasitas}}" />
                        </div>
                    </div>
                    
                        
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
