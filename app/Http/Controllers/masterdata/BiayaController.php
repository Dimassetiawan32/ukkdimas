<?php

namespace App\Http\Controllers\masterdata;

use App\Biaya;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BiayaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $biayas = Biaya::all();
        return view('masterdata.biaya.index', compact('biayas'));
    }

    public function create()
    {
        return view('masterdata.biaya.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'jenis'       => 'required',
            'biaya'       => 'required',   
        ]);

        $biayas = Biaya::create([
            'jenis'       => $request->jenis,
            'biaya'       => $request->biaya,   
        ]);

        $biayas->save();
        toast('Data Jenis Berhasil Ditambahkan','success');
        return redirect('biaya/index');
    }

    public function edit($id)
    {
        $biaya = Biaya::findOrFail($id);
        return view('masterdata.biaya.edit', compact('biaya'));
    }

    public function update(Request $request, $id)
    {
        $biaya = Biaya::find($id);
        $biaya->update($request->all());
        toast('Data Jenis Berhasil Diperbarui','success');
        return redirect('biaya/index');
    }

    public function destroy($id)
    {
        $biaya = Biaya::find($id);
        $biaya->delete($biaya->all());
        toast('Data Jenis Berhasil Ditambahkan','success');
        return redirect('biaya/index');
    }
}
