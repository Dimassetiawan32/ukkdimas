@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Data Master Biaya 
                <a href="{{route('masterdata.biaya.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah Data</a>
            </h3>
        </div>
        <hr>
        @csrf
        @if(session('success'))
            <div class="alert alert-danger">
                {{ session('success')}}
            </div>
        @endif
        <div class="container">
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Jenis Kendaraan</th>
                            <th>Biaya</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($biayas as $biaya)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$biaya->jenis}}</td>
                            <td>{{$biaya->biaya}}</td>
                            <td>
                                <form action="{{route('masterdata.biaya.delete', $biaya->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('masterdata.biaya.formEdit', $biaya->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Maaf Data Belum Tersedia. <a href="{{route('masterdata.biaya.create')}}">Tekan Disini Untuk menambahkan</a>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection