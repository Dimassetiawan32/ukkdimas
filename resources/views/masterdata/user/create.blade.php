@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 pt-4">
            <h2 class="text-primary font-weight-bold">
                Tambah User Baru  
            </h2>
            <hr>
            <form>
                <div class="px-4">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Username</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label font-weight-bold">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="" id="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nama User</label>
                        <div class="col-sm-4">
                            <input type="" class="form-control" name="" id="" placeholder="Nama User">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Alamat</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" name="" id="" placeholder="Alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Nomor HP</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="" id="" placeholder="Nomor Hp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label font-weight-bold">Jenis User</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="" id="">
                                <option value="">--- Pilih Jenis User ---</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            <div class="pt-3">
                                <a href="" class="btn btn-success">Simpan</a>
                                <a href="{{route('masterdata.user.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection