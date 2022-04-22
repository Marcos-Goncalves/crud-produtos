<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(Request $request) {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->marca = $request->marca;
        $produto->importado = $request->importado == 'on'? true:false;
        $produto->save();
        return redirect('produtos');
    }

    public function index(){
        $produtos = Produto::all();
        return view('index', ['data'=>$produtos]);
    }

    public function produto($id){
        $produtos = Produto::find($id);
        return view('produto', ['produtos'=>$produtos]);
    }

    public function delete($id){
        $produtos = Produto::find($id)->delete();
        //return redirect('produtos');
    }
}
