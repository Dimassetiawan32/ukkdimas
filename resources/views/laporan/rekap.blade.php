@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Daftar Transaksi {{Request('tglawal')}} Sampai {{Request('tglakhir')}}         
            </h3>
        </div>
        <hr>
        <div class="container">
            <div class="pt-2">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>No. Nota</th>
                            <th>Nama Pelangan</th>
                            <th>Jenis</th>
                            <th>Bayar</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                     @forelse($rekap as $transaksi)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaksi->no_nota}}</td>
                            <td>{{$transaksi->pelanggan}}</td>
                            <td>{{$transaksi->biaya->jenis}}</td>
                            <td>Rp. {{$transaksi->bayar}}</td>
                            <td>{{$transaksi->created_at->format('d M Y')}}</td>
                                     
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Maaf Data Belum Tersedia. 
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="pt-4">
                <div class="col-md-6 d-flex">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-primary table-primary">
                                <th>
                                    <h4>Jumlah Pelanggan</h4>
                                </th>
                                <th>
                                    <h4>Jumlah Pendapatan</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-primary text-right">
                                <td>
                                    <h4>0 orang</h4>
                                </td>
                                <td>
                                    <h4>Rp. 0</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <div class="pt-1">
                        <a href="{{route('laporan.index')}}" class="btn btn-primary">Kembali</a>
                        <button type="button" class="btn btn-danger" onclick="window.print()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16"><path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/><path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/></svg>
                            Cetak
                        </button>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection