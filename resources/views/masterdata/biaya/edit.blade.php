@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 pt-4">
            <h2 class="text-primary font-weight-bold">
                Edit Data Master Biaya 
            </h2>
            <hr>
            <form action="{{route('masterdata.biaya.update', $biaya->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                <div class="px-4">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Jenis Kendaraan</label>
                        <div class="col-sm-4">
                        <input type="" class="form-control" name="jenis" id="" placeholder="Jenis Kendaraan" value="{{$biaya->jenis}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Biaya Jasa</label>
                        <div class="col-sm-4">
                        <input type="number" class="form-control" name="biaya" id="" placeholder="Biaya Jasa" value="{{$biaya->biaya}}">
                            <div class="pt-3">
                               <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="{{route('masterdata.biaya.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection