<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Gudang;
use DB;

class BarangController extends Controller
{
    public function all()
    {
        $barang = Barang::paginate(5);

        return view('barang.all',compact('gudang','barang'));
    }

    public function add()
    {
        $gudang = Gudang::all();

        return view('barang.add', compact('gudang'));
    }

    public function save()
    {
        Barang::create([
            'nama' => request('nama'),
            'berat' => request('berat'),
            'gudang_id' => request('gudang_id')
        ]);

        return redirect()->route('all_barang')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {   
        $barang = Barang::find($id);

        $gudang = Gudang::all();

        return view('barang.edit', compact('gudang','barang'));
    }

    public function update($id)
    {
        $barang = Barang::find($id);

        $barang->update([
            'nama' => request('nama'),
            'berat' => request('berat'),
            'gudang_id' => request('gudang_id')
        ]);

        return redirect()->route('all_barang')->with('info', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);

        $barang->delete();

        return redirect()->route('all_barang')->with('danger', 'Data telah dihapus');
    }
}
