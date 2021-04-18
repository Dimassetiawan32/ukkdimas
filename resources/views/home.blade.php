@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron shadow">
            <h3 class="text-primary font-weight-bold px-3">
                Selamat Datang di Aplikasi Kasir Jasa Cuci
            </h3>
            <h5 class="text-muted px-3">
                Halo <strong>{{ Auth::user()->name }}</strong>, Anda login sebagai <strong>{{ auth()->user()->roles->first()->name }}</strong>.
            </h5>
    </div>
</div>
@endsection
