@extends('layouts.app')

@section('title', 'Form Edit')

@section('contents')
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Edit Data Pengambilan</h4>
                <p class="card-description">Biodata</p>
                <form action="/editPengambilan/{{$data_pengambilan->id_pengambilan}}" method="POST">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="id_pengambilan" class="col-sm-3 col-form-label">ID PENGAMBILAN</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_pengambilan" value="{{$data_pengambilan->id_pengambilan}}" />
                        </div>
                    
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">TANGGAL</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal" placeholder="TANGGAL" value="{{$data_pengambilan->tanggal}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="waktu" class="col-sm-3 col-form-label">WAKTU</label>
                        <div class="col-sm-9">
                            <input type="time" class="form-control" name="waktu" placeholder="WAKTU" value="{{$data_pengambilan->waktu}}" />
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
