<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function index(){
        $data['user']=User::all();

    return view('Admin.User.index',$data);}

public function create(){

return view('Admin.User.create.index');}

public function store(Request $request){
$request->validate([
'primeiro_nome'=>'required|min:3|max:40',
'ultimo_nome'=>'required|min:3|max:40',
'email'=>'required|email',
'foto'=>'image',
'perfil_acesso'=>'required'
   



],[
    'primeiro_nome.required'=>'O Primeiro nome é obrigatório',
    'ultimo_nome.required'=>'O Último nome é obrigatório',
    'email.required'=>'O Email é um campo obrigatório',
    'foto.image'=>'O arquivo selecionado não é uma imagem válida',
    'perfil_acesso.required'=>'O perfil é um campo obrigatório',
    

]);

try {
    //code...
    if($request->hasFile('foto') ){
        $file=$request->file('foto');
        $extension=$file->getClientOriginalExtension();
        $filename=time(). '.' . $extension;
        $file->move('img/users',$filename);
    }
    else{
            $filename=null;
    }
    
    $user=User::create([
        'primeiro_nome'=>$request->primeiro_nome,
        'ultimo_nome'=>$request->ultimo_nome,
        'email'=>$request->email,
        'foto'=>$filename,
        'perfil_acesso'=>$request->perfil_acesso,
        'password'=>Hash::make('12345678')

    ]);
return redirect()->back()->with('status',1);} 
catch (\Throwable $th) {
    
    //throw $th;
    return redirect()->back()->with('aviso',1);}

}
public function edit($id){
    $data['user']=User::find($id);

return view('Admin.User.index',$data);}

public function update(Request $request,$id){

$request->validate([

    'primeiro_nome'=>'required|min:3|max:40',
    'ultimo_nome'=>'required|min:3|max:40',
    'email'=>'required|email',
    'foto'=>'image',
    'perfil_acesso'=>'required'
   


],[
    'primeiro_nome.required'=>'O Primeiro nome é obrigatório',
    'ultimo_nome.required'=>'O Último nome é obrigatório',
    'email.required'=>'O Email é um campo obrigatório',
    'foto.image'=>'O arquivo selecionado não é uma imagem válida',
    'perfil_acesso.required'=>'O perfil é um campo obrigatório'


]);

try {
    //code...
    if($request->hasFile('foto') ){
        $file=$request->file('foto');
        $extension=$file->getClientOriginalExtension();
        $filename=time(). '.' . $extension;
        $file->move('img/users',$filename);
    }
  else{
      // recupera o caminho da foto do usuário atual para manter a foto existente já selecionada
      $user = User::findOrFail($id);
      $filename = $user->foto;
  }

$user=User::find($id);
$u=User::findOrFail($id)->update([
    'primeiro_nome'=>$request->primeiro_nome,
    'ultimo_nome'=>$request->ultimo_nome,
    'email'=>$request->email,
    'foto'=>$filename,
    'perfil_acesso'=>$request->perfil_acesso,


]);
    


return redirect()->back()->with('status',1);} 
catch (\Throwable $th) {
    //throw $th;
    dd($th);
return'Erro';}

}

public function purge($id){
try {
    //code...
    $user=User::find($id);
    User::findOrfail($id)->delete();
    
return redirect()->back()->with('status2',1);} 
catch (\Throwable $th) {
    //throw $th;
return redirect()->back()->with('aviso2',1);}

}


}
