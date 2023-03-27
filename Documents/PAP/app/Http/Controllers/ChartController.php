<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Contentor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class ChartController extends Controller
{
    //

    public function index(){
        //$elections=['BJP'=>1200,'RJD'=>15000,'AAP'=>1000,'INC'=>9000,'SP'=>18000];
        $dados=DB::table('contentores')->join('enderecos','contentores.id_endereco','=','enderecos.id')->select('enderecos.nome_endereco as nome_endereco',DB::raw('count(contentores.id_endereco) as total'))->groupBy('enderecos.nome_endereco')->get();
        
        
        
        $balanco=$dados->mapWithKeys(function($item,$key){
          return[$item->nome_endereco => $item->total ];  
        });
        $totContentor=Contentor::count();
        $totUsuarios=User::count();
        $totEnderecos=Endereco::count();
        
        return view('Admin.dashboard',compact('balanco','totContentor','totUsuarios','totEnderecos'));}



}
