<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;
use Illuminate\Http\Request;

class ElektronikController extends Controller
{
    public function index()
    {
        $elektronikC=Elektronik::get();
        return view("Elektroniks.elektronik",compact("elektronikC"));
    }

    public function create()
    {
        return view("Elektroniks.create");
    }
    public function store(Request $request)
    {
        $elektronikC=Elektronik::create([
       "nama_barang" => $request->nama_barang,
       "harga_barang" => $request->harga_barang,
       "stok" => $request->stok
        ]);
       return redirect("/");

    }
    public function edit($id){
        $elektronikC=Elektronik::findOrFail($id);
        return view("Elektroniks.edit", compact("elektronikC"));
    }

    public function update(Request $request, $id){
        $elektronikC  = Elektronik::find($id);
        $elektronikC  -> update([
            "nama_barang"=> $request->nama_barang ??   $elektronikC->nama_barang,
            "harga_barang"=> $request->harga_barang ?? $elektronikC->harga_barang,
            "stok"=> $request->stok ??  $elektronikC->stok,
        ]);
        return redirect("/");
     }

     public function destroy($id){
        
        $elektronikC=Elektronik::findOrFail($id);
        $elektronikC->delete();
        return redirect("/");
     }
}
