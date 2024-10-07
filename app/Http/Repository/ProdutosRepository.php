<?php

namespace App\Http\Repository;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;
use App\Http\Repository\Contracts\ProdutosContracts;



class ProdutosRepository implements ProdutosContracts {

    public function ListarProdutos(){
        // $products = DB::table('produtos')->orderby('valor','desc')->get();    // query builder 
        $products = Produto::orderBy('valor','desc')->get();      // eloquent
        return $products;
    }

    public function CadastroProduto(Produto $produto): void {
        $produto->save();
    }

    


}