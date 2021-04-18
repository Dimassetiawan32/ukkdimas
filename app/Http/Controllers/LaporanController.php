<?php

namespace App\Http\Controllers;

use App\Biaya;
use App\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $tampils = Transaksi::with('biaya')->latest()->paginate(1);
        return view('laporan.index', compact('tampils'));
    }

    public function rekap($tglawal, $tglakhir)
    {
    //    dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $biayas = Biaya::all();
        $rekap = Transaksi::all()->whereBetween('created_at',[$tglawal, $tglakhir])->all();
        return view('laporan.rekap',compact('rekap','biayas'));
    }
}
