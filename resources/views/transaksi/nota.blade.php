<!DOCTYPE html>
<html>
    <head>
        <title>STEAM KENDARAAN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style>
        <div class="pt-3">
            <div class="col-md-12">
                <h3 class="text-primary text-center font-weight-bold">
                    STEAM KENDARAAN
                </h3>
            </div>
            <hr> 
            <div class="pt-1">
                <h5 class="text-primary">
                    Nota Nomor : {{$transaksi->no_nota}}
                </h5>

            </div>
            <div class="pt-2">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>Nama Pelangan</th>
                            <th>Jenis kendaraan</th>
                            <th>Biaya Jasa</th>
                            <th>Bayar</th>
                            <th>Kembali</th>
                            <th>Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$transaksi->pelanggan}}</td>
                            <td>{{$transaksi->biaya->jenis}}</td>
                            <td>RP. {{$transaksi->biaya->biaya}}</td>
                            <td>Rp. {{$transaksi->bayar}}</td>
                            <td>Rp. {{$transaksi->bayar - $transaksi->biaya->biaya}}</td>
                            <td>Rp. {{$transaksi->bayar}}</td>
                        </tr>
                    </tbody>
                </table>
                        <p class="text-muted">
                        {{$transaksi->created_at}}
                        </p>
                    <div class="pt-2">
                        <p class="text-muted" style="margin: 0 0 50px 79%;">
                        {{ auth()->user()->roles->first()->name }}
                        </p>
                    </div>
                    <div class="pt-3">
                        <p class="font-weight-bold" style="margin: 0 0 50px 75%;">
                        {{ Auth::user()->name }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted text-center">
                        ------------Terima Kasih------------
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>