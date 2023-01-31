<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class StockOpnameController extends Controller
{
    public function show()
    {
        $barang = Barang::get();

        return view('stock-opname', ['barang' => $barang]);
    }
    public function detail($id)
    {
        $barang = Barang::find($id);

        return view('detail', ['barang' => $barang]);
    }
    public function save(Request $request)
    {
        Barang::find($request->id)->update([
            'stok_fisik' => $request['stok'],
        ]);
        $route = 'barang/' . $request->id;

        return redirect($route);
    }
}
