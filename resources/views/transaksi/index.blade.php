@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Daftar Transaksi
                @role('Admin|Kasir')
                <a href="{{route('transaksi.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah Transaksi</a>
                @endrole            
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
                            <th>No. Nota</th>
                            <th>Nama Pelangan</th>
                            <th>Jenis</th>
                            <th>Bayar</th>
                            <th>Tanggal</th>
                            @role('Admin|Kasir')
                            <th>Action</th>
                            @endrole            
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($transaksis as $transaksi)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaksi->no_nota}}</td>
                            <td>{{$transaksi->pelanggan}}</td>
                            <td>{{$transaksi->biaya->jenis}}</td>
                            <td>Rp. {{$transaksi->bayar}}</td>
                            <td>{{$transaksi->created_at->format('d M Y')}}</td>
                            @role('Admin|Kasir')
                            <td>
                                <form action="{{route('transaksi.delete', $transaksi->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('transaksi.CekNota', $transaksi->id)}}" class="btn btn-primary btn-sm">Cek Nota</a>
                                    <a href="{{route('transaksi.formEdit', $transaksi->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                            @endrole            
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Maaf Data Belum Tersedia. 
                                @role('Admin|Kasir')
                                <a href="{{route('transaksi.create')}}">Tekan Disini Untuk menambahkan</a> 
                                @endrole
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