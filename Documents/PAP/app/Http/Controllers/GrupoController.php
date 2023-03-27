<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GruposColeta;
class GrupoController extends Controller
{
    //
    

    public function index(){
        $data['grupo_coleta']=GruposColeta::all();

        return view('Admin.Grupo.index',$data);
}
    
    public function create(){
        return view('Admin.Grupo.create.index');}



    public function store(Request $request){
       
        $request->validate([
            'nome_grupo'=>'required|min:3|max:100'
        ]);
        try{
            $grupo=GruposColeta::create([
                'nome_grupo'=>$request->nome_grupo
               
            ]);
        
        return redirect()->back()->with('grupos.create.success',1);}
    catch(\Throwable $th){

    return 'Erro ao criar grupo';}
}

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

public function edit($id){
$data['grupo_coleta']=GruposColeta::find($id);

return view('Admin.Grupo.edit.index');}



public function update(Request $request,$id){
$request->validate([
            'nome_grupo'=>'required|min:3|max:100'
],[
            'nome_grupo'=>'O nome do grupo é um campo obrigatório'
        ]);

        try{
            $grupo_coleta=GruposColeta::find($id);
            $grupo=GruposColeta::findOrFail($id)->update([
                'nome_grupo'->request->nome_grupo
            ]);
        
            return redirect()->back()->with('grupos.create.success',1);}
            catch (\Throwable $th) {
                //throw $th;
                return redirect()->back()->with('classe.update.error',1);
             }
        
        }




}
