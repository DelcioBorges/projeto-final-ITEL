<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contentor;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;
class ContentorController extends Controller
{
    //

public function index(){
$data['contentor']=DB::table('contentores')->join('enderecos','contentores.id_endereco','=','enderecos.id')->select('contentores.id','contentores.estado','enderecos.nome_endereco','contentores.created_at')->get();
$endereco=Endereco::all();

return view('Admin.Contentor.index',$data,compact('endereco'));}


public function create(){
$endereco=Endereco::all();

return view('Admin.Contentor.create.index',compact('endereco'));}

public function store(Request $request){
$request->validate([
'estado'=>'required',
'id_endereco'=>'required'
],
[
    'estado.required'=>'O estado do contentor é um campo obrigatório',
    'id_endereco.required'=>'O endereço do contentor é um campo obrigatório'
]);
try {

    //code...
    
$contentor=Contentor::create([
    'estado'=>$request->estado,
    'id_endereco'=>$request->id_endereco
    
    ]);
    

return redirect()->back();}
 catch (\Throwable $th) {
    //throw $th;

    dd($th);
    return 'erro';}

}


public function purge($id){
try {
    //code...
    
    $contentor=Contentor::find($id);
    Contentor::findOrFail($id)->forceDelete();
    
return redirect()->back();}
 catch (\Throwable $th) {
    //throw $th;
return 'Erro';}
}


}
