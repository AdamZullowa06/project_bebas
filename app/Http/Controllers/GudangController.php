<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;
use App\Barang;

class GudangController extends Controller
{
    public function all()
    {
        $gudang = Gudang::paginate(7);

        return view('gudang.all', compact('gudang'));
    }

    public function add()
    {
        $gudang = Gudang::all();

        return view('gudang.add', compact('gudang'));
    }

    public function save(Request $request)
    {
        $gudang = new Gudang;
        $gudang->alamat = $request->input('alamat');
        $gudang->kapasitas = $request->input('kapasitas');

        $foto = $request->file('image');
        $namafile = $foto->getClientOriginalName();
        $request->file('image')->move("upload/image/", $namafile);

        $gudang->pic = $namafile;
        $gudang->save();
        
        return redirect()->route('all_gudang')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $gudang = Gudang::find($id);

        return view('gudang.edit')->with('gudang', $gudang);
    }

    public function update($id)
    {
        $gudang = Gudang::find($id);

        $gudang->update([
            'alamat' => request('alamat'),
            'kapasitas' => request('kapasitas')
        ]);

        return redirect()->route('all_gudang')->with('info', 'Data berhasil diubah');
    }

    public function destroy($id)
    {   
        $gudang = Gudang::find($id);

        $gudang->delete();

        return redirect()->route('all_gudang')->with('danger', 'Data telah dihapus');
    }
}
