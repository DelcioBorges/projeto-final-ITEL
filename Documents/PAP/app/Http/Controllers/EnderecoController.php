<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
class EnderecoController extends Controller
{
    //

public function index(){
$data['endereco']=Endereco::all();

return view('Admin.Endereco.index',$data);}

public function create(){

return view('Admin.Endereco.create.index');}


public function store(Request $request){
    $request->validate([
        'nome_endereco'=>'required|max:55'
    ],[
        'nome_endereco.required'=>'O Nome do endereço é obrigatório'
    ]);

    try{       
            $endereco=Endereco::create([
                'nome_endereco'=>$request->nome_endereco
            ]);
    return redirect()->back();}

    catch(\Throwable $th){
        dd($th);
        return 'Erro ao criar endereços';}

}

public function show($id){

}

public function edit($id){
$data['endereco']=Endereco::find($id);

return view('Admin.Endereco.edit.index',$data);}


public function update(Request $request,$id){
    $request->validate([
        'nome_endereco'=>'required|max:55'
    ],[
        'nome_endereco.required'=>'O Nome do endereço é obrigatório'
    ]);

    try {
        //code...
        $endereco=Endereco::find($id);
        $e=Endereco::findOrFail($id)->update([
            'nome_endereco'=>$request->nome_endereco

        ]);
    


   return view('Admin.Endereco.index'); } 
   
   catch (\Throwable $th) {
        //throw $th;
        return 'erro';
    }



}

public function purge($id){
try {
    //code...
    
$endereco=Endereco::find($id);
Endereco::findOrFail($id)->forceDelete();

return redirect()->back();} 
catch (\Throwable $th) {
    //throw $th;
    return'Erro';
}


}







}

