<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoStoreRequest;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(ProdutoStoreRequest $request) {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->marca = $request->marca;
        $produto->importado = $request->importado == 1 ? true:false;
        $produto->save();
        return redirect('/');
    }

    public function index(){
        $produtos = Produto::paginate(2);
        return view('index', ['data'=>$produtos]);
    }

    public function produto($id){
        $produtos = Produto::find($id);
        return view('produto', ['produtos'=>$produtos]);
    }

    public function delete($id){
        $produtos = Produto::find($id)->delete();
        return redirect('/');
    }

    public function edit($id){
        $produtos = Produto::findOrFail($id);
        return view('edit', ['produtos' => $produtos]);
    }

    public function update(ProdutoStoreRequest $request){
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('/');
    }
    
}