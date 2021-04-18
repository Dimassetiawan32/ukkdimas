@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 pt-4">
            <h2 class="text-primary font-weight-bold">
                Tambah Transaksi
            </h2>
            <hr>
            <form action="{{route('transaksi.save')}}" enctype="multipart/form-data" method="POST">
            @csrf
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
            @endif
                <div class="px-4">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Jenis Kendaraan</label>
                        <div class="col-sm-4">
                            <select name="biaya_id" id="" class="form-control">
                                <option value="">Pilih Jenis Kendaraan</option>
                                @foreach($biayas as $biaya)
                                    <option value="{{$biaya->id}}">{{$biaya->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Bayar</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="bayar" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama Pelanggan</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="pelanggan" id="" placeholder="">
                            <div class="pt-3">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="{{route('transaksi.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection