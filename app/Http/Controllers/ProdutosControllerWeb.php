<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProdutoController;

class ProdutosControllerWeb extends Controller
{
    protected $prodController;

    public function __construct(){
        $this->prodController = new ProdutoController();
    }

    public function OpenListagemPage(){
        $produtos = $this->prodController->ListarProdutos();
        $message = "";

        if($produtos == null || $produtos ==[]){
            $message = "Lista de produtos vazia";
            return view('produtos.listagem',[
                'message' => $message,
            ]);
        }

        return view('produtos.listagem',[
            'produtos' => $produtos,
            'message' => $message,
        ]);
    }

    public function CadastrarEvoltarParaListagem(Request $request){
        if($request['valor'] > 99999999.99){
            return view('produtos.cadastro',[
                'message' => "valor muito alto (maior que 99999999.99)"
            ]);
        }

        if($request['valor'] < 0){
            return view('produtos.cadastro',[
                'message' => "proibido valores negativos"
            ]);
        }

        $produto = [
            "nome" => $request["nome"],
            "valor" => $request['valor'],
            "descricao" => $request['descricao'],
            "disponivel" => $request['disponivel'] == 1 || $request['disponivel'] == "1"  ? True : False, 
        ];
        
        $this->prodController->CadastrarProduto($produto);
        return redirect('/');
    }

    public function OpenCadastroPage(){
        $message = "";
        return view('produtos.cadastro',[
            'message' => $message,
        ]);
    }
}
