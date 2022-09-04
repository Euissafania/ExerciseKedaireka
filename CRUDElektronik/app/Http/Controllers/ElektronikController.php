<?php

namespace App\Http\Controllers;

use App\Models\Elektronik;

use Illuminate\Http\Request;
use App\Models\ElektronikType;
use Illuminate\Support\Facades\DB;

class ElektronikController extends Controller
{
    //

    public function index()
    {
        $elektronikC =Elektronik::with("ElektronikType")->orderBy("harga")->paginate(10);

        // inner join
        // $items=DB::table("items")
        //      ->join("item_types","Items.item_type_id", "=", "item_types.id")
        //      ->select("items.*", "item_types.name as jenis")
        //     ->paginate();
        //Aritmatika
        // $items=DB::table("items")
        //      ->join("item_types","Items.item_type_id", "=", "item_types.id")
        //     ->select(DB::raw('items.id, items.name, items.qty, items.price,(items.qty*items.price) as jumlah'))
        //     ->paginate();

        // return view("items.item",compact("items"));
        //  return view("Elektroniks.elektronik",compact("elektronikC"));
        return view("Elektroniks.elektronik_table",compact("elektronikC"));
    }

    public function create()
    {
        $elektronikTypes=ElektronikType::all();
        return view("Elektroniks.create_elektronik",compact("elektronikTypes"));
    }

    public function store(Request $request)
    {
        $elektronikC= Elektronik::create([
       "elektronik_type_id" => $request->elektronik_type_id,
       "nama_elektronik" => $request->nama_elektronik,
       "quantity" => $request->quantity,
       "harga" => $request->harga,
        ]);
       return redirect("/");

    }
    public function edit($id){
    $elektronikC =Elektronik::findOrFail($id);
        $elektronikTypes=ElektronikType::get();
        return view("Elektroniks.form_edit", compact("elektronikC","elektronikTypes"));
    }

    public function update(Request $request, $id){
        $elektronikC = Elektronik::find($id);
    $elektronikC  -> update([
            "elektronik_type_id" => $request->item_type_id ??  $elektronikC->elektronik_type_id,
            "nama_elektronik"=> $request->name ??  $elektronikC->nama_elektronik,
            "quantity"=> $request->quantity?? $elektronikC->quantity,
            "harga"=> $request->harga ??  $elektronikC->harga,
        ]);
        return redirect("/");
     }

     public function destroy($id){
        
        $elektronikC =Elektronik::findOrFail($id);
        $elektronikC ->delete();
        return redirect("/");
     }
}
