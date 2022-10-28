<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function getAll(){
        return Item::all();
    }
    public function add(Request $request){
        Item::create([
            "namaBarang" => $request->namaBarang,
            "hargaBarang" => $request->hargaBarang,
            "jumlahBarang" => $request->jumlahBarang,
        ]);
        $message = "Barang Berhasil Ditambahkan";
        return redirect('/')->with(['status'=>$message]);
    }
    public function delete($id){
        Item::destroy($id);
        $message = "Barang Berhasil Dihapus";
        return redirect('/')->with(['status'=>$message]);        
    }
    public function getById($id){
        return response()->json(Item::where('id',$id)->get());
    }
    public function ubah(Request $request, $id){
        $data = [
            'namaBarang' => $request->namaBarang,
            'hargaBarang' => $request->hargaBarang,
            'jumlahBarang' => $request->jumlahBarang,
        ];
        Item::where('id','=',$id)->update($data);

        $message = 'Data Berhasil Diubah';
        return redirect('/')->with(['status'=>$message]);
    }
}
