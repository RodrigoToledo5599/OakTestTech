<?php

namespace App\Http\Repository\Contracts;

use App\Models\Produto;

interface ProdutosContracts{
    
    public function ListarProdutos();
    public function CadastroProduto(Produto $produto);

}