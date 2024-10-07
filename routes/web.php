<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosControllerWeb;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',function(){
//     return view('welcome');
// });

Route::get('/',[ProdutosControllerWeb::class, 'OpenListagemPage']);
Route::get('/cadastro_produto',[ProdutosControllerWeb::class, 'OpenCadastroPage']);
Route::post('/cadastrar_e_voltar_para_listagem',[ProdutosControllerWeb::class, 'CadastrarEvoltarParaListagem']);