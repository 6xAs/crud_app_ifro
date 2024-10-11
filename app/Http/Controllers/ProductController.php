<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products         = Product::orderBy('created_at', 'desc')->get();
        return view('products.index')
            ->with('products', $products);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna apenas a minha view
        return view('products.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aqui é que a mágica acontece!!😎😎

        $request->validate([
            'nome_produto'          => 'required',
            'marca'                 => 'required',
            'categoria'             => 'required',
            'valor_compra'          => 'required|numeric',
            'valor_venda'           => 'required|numeric',
            'qtd_estoque'           => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('message', 'Produto Criado com Sucesso👌👌😎');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Editar Produtos
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $product = Product::find($id);
         $request->validate([
            'nome_produto'          => '',
            'marca'                 => '',
            'categoria'             => '',
            'valor_compra'          => 'numeric',
            'valor_venda'           => 'numeric',
            'qtd_estoque'           => 'integer',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('message', 'Produto Editado com Sucesso👌👌😎');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Deletar Produto
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Seu produto foi deletado da base de dados🫢🫢');

    }
}
