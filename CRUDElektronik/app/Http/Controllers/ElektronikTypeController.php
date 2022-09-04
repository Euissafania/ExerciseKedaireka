<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ElektronikType;

class ElektronikTypeController extends Controller
{
    //
    public function index_type()
    {
        $elektronikTypes=ElektronikType::paginate(10);
        return view("ElektroniksTypes.type_table",compact("elektronikTypes"));
    }
    
    public function create()
    {
        // $elektronikTypes=ElektronikType::all();
        return view("ElektroniksTypes.create_type");
    }
    public function store_type(Request $request)
    {
        $elektronikTypes=ElektronikType::create([
       "nama_type"      => $request->nama_type,
       "stok"           => $request->stok,
       "description"    => $request->description
        ]);
       return redirect("/index_type");

    }
    public function edit($id){
        $elektronikTypes=ElektronikType::findOrFail($id);
        return view("ElektroniksTypes.edit_type", compact("elektronikTypes"));
    }

    public function update(Request $request, $id)
    {
        $elektronikTypes  = ElektronikType::find($id);
        $elektronikTypes  -> update([
            "nama_type"=> $request->nama_type ??   $elektronikTypes->nama_type,
            "stok"=> $request->stok ??  $elektronikTypes->stok,
            "description"=> $request->description ?? $elektronikTypes->description,
        ]);
        return redirect("/index_type");
    }
     public function destroy($id){
        
        $elektronikTypes=ElektronikType::findOrFail($id);
        $elektronikTypes->delete();
        return redirect("/index_type");
     }
}
