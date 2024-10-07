<?php

namespace App\Http\Services;

use App\Models\Produto;
use App\Http\Repository\ProdutosRepository;

class ProdutoServices{
    protected $prodRepo;

    public function __construct(){
        $this->prodRepo = new ProdutosRepository();
    }

    public function ListarProdutos(){
        $produtos = $this->prodRepo->ListarProdutos();
        return $produtos;
    }

    public function CadastrarProduto($produto){
        $Produto = new Produto;
        $Produto->nome = $produto['nome'];
        $Produto->descricao = $produto['descricao'];
        $Produto->valor = $produto['valor'];
        $Produto->disponivel = $produto['disponivel'];
        $this->prodRepo->CadastroProduto($Produto);
    }


}