<?php

namespace App\Http\Controllers;

use App\Biaya;
use App\Transaksi;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $biayas = Biaya::all();
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('biayas','transaksis'));
    }
    
    public function create()
    {
        $biayas = Biaya::all();
        return view('transaksi.create', compact('biayas'));
    }

    public function store(Request $request)
    {
        $transaksis = Transaksi::create([
            'biaya_id'      => $request->biaya_id,
            'bayar'         => $request->bayar,
            'pelanggan'     => $request->pelanggan,
        ]);

        $transaksis->save();
        toast('Transaksi Berhasil Ditambahkan','success');
        return redirect('transaksi/index');
    }
    
    public function ceknota($id)
    {
        $biayas = Biaya::all();
        $transaksi = Transaksi::with('biaya')->findOrFail($id);
        $pdf = PDF::loadview('transaksi.nota',['transaksi'=>$transaksi]);
        return $pdf->stream();
    }

    public function edit($id)
    {
        $biaya = Biaya::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('biaya','transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        toast('Transaksi Berhasil Diperbarui','success');
        return redirect('transaksi/index');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete($transaksi->all());
        toast('Transaksi Berhasil DiHapus','success');
        return redirect('transaksi/index');
    }
}
