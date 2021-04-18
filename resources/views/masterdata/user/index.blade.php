@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-primary font-weight-bold">
                Data User 
                <a href="{{route('masterdata.user.create')}}" class="btn btn-success btn-sm" style="float: right;">Tambah User</a>
            </h3>
        </div>
        <hr>
        <div class="container">
            <div class="pt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>241</td>
                            <td>dasad</td>
                            <td>dasad</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection