@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <div class="d-flex">
                <h3 class="text-primary font-weight-bold">
                    Rekap Laporan Penghasilan Hari ini 
                    <h4 class="text-muted pt-1 ml-1">
                    <?php echo date('(d-m-Y)'); ?>
                    </h4>
                </h3>
            </div>
            <hr>
            <div class="card bg-light border-0 shadow">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="date" name="tglawal" class="form-control" id="tglawal">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="date" name="tglakhir" class="form-control" id="tglakhir">
                        </div>
                        <div class="form-group">
                            <a href="" onclick="this.href='rekap/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary">
                                Tampilkan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                            @foreach($tampils as $tampil)
                            <tr class="text-primary text-right">
                                <td>
                                    <h4>{{$tampils->total()}}</h4>
                                </td>
                                <td>
                                    <h4>Rp. {{$tampil->biaya->biaya * $tampils->total()}}</h4>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="ml-2">
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