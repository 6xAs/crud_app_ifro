<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ListarProdutos');
});

###################### AQUI ESTÃO AS ROTAS DOS MEU CONTROLADOR PRODUTO ##############
Route::get('/products', [ProductController::class, 'index'])->name('products.index');






/* Route::get('/lista-de-alunos', function () {
    $aluno1 = 'Kauan';
    $aluno2 = 'Grazi';
    $aluno3 = 'Robson';
    $aluno4 = 'Dani';
    return view('ListarProdutos')
        ->with('aluno1', $aluno1)
        ->with('aluno2', $aluno2)
        ->with('aluno3', $aluno3)
        ->with('aluno4', $aluno4);
});
 */
