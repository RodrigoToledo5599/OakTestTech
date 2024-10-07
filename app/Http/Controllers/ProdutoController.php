<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ProdutoServices;

class ProdutoController extends Controller
{
    protected $prodService;
    public function __construct(){
        $this->prodService = new ProdutoServices();
    }

    public function ListarProdutos(){
        $result = $this->prodService->ListarProdutos();
        return $result;
    }

    public function CadastrarProduto(array $request){
        $this->prodService->CadastrarProduto($request);
    }
    
    
}
