<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        $data['data'] = DB::table(DB::raw('cao_fatura fatura'))
        ->select('user.co_usuario',DB::raw('DATE_FORMAT(fatura.data_emissao,"%Y-%M") as mes'),DB::raw('FORMAT((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)),2) as rliquida'),DB::raw('FORMAT(salario.brut_salario,2) as custofixo'),DB::raw('FORMAT((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100),2) as comissao'),DB::raw('FORMAT(((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) - (salario.brut_salario+(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100))),2) as lucro'))
        ->join(DB::raw('cao_os os'),'os.co_os','=','fatura.co_os')
        ->join(DB::raw('cao_usuario user'),'user.co_usuario','=','os.co_usuario')
        ->join(DB::raw('cao_salario salario'),'salario.co_usuario','=','user.co_usuario')
        ->whereRaw('fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario)')
        ->whereYear('fatura.data_emissao','=',2007)
        ->whereMonth('fatura.data_emissao','>=',1)
        ->whereMonth('fatura.data_emissao','<=',2)
        ->groupBy(DB::raw('user.co_usuario,salario.brut_salario, DATE_FORMAT(fatura.data_emissao,"%Y-%M") WITH ROLLUP'))
        ->get();
        
        return view('users')->with('data', $data);
    }

}
