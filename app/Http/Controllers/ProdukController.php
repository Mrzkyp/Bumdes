<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Produk::where('nama','LIKE', '%' .$request->search. '%');
        }else{
            $data = Produk::paginate(5);
        }
        return view('dataproduk', compact("data"));
    }

    public function tambahproduk(){
        return view("tambahproduk");
    }

    public function insertdata(request $request){
        //dd($request->all());
        $data = Produk::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoproduk/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route("produk")->with("success", "Data berhasil di tambahkan");
    }

    public function tampildata($id){
        $data = Produk::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Produk::find($id);
        $data->update($request->all());

        return redirect()->route("produk")->with("success", "Data berhasil di update");
    }

    public function delete($id){
        $data = Produk::find($id);
        $data->delete();

        return redirect()->route("produk")->with("success", "Data berhasil di hapus");
    }
}
