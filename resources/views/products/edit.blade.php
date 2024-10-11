<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR Produto</title>
</head>
<body>
    <div>
        <nav>
            <table>
                <tr>
                    <td> <a href=" {{ url('/home') }} "> <button> Home</button></a> </td>
                    <td> <a href=" {{ url('/products/create') }} "> <button> Cadastrar Produtos</button></a></td>
                    <td> <a href=" {{ url('/products') }} "> <button> Listar Produtos</button></a></td>

                </tr>
            </table>
        </nav>
    </div>
    <h1>Página - EDITAR PRODUTO</h1>
    <br>
    <form action=" {{ route('products.update', $product->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nome_produto">NOME PRODUTO:</label>
        <input type="text" name="nome_produto" id="nome_produto" value="{{ $product->nome_produto }}" required >

        <label for="marca">MARCA:</label>
        <input type="text" name="marca" id="marca" value="{{ $product->marca }}" required >

        <label for="categoria">CATEGORIA:</label>
        <input type="text" name="categoria" id="categoria" value="{{ $product->categoria }}" required >

        <label for="valor_compra">VALOR COMPRA:</label>
        <input type="text" name="valor_compra" id="valor_compra" value="{{ $product->valor_compra }}" value="{{ $product->nome_produto }}" required >

        <label for="valor_venda">VALOR VENDA:</label>
        <input type="text" name="valor_venda" id="valor_venda" value="{{ $product->valor_venda }}" required >

        <label for="qtd_estoque">QTD. ESTOQUE:</label>
        <input type="text" name="qtd_estoque" id="qtd_estoque" value="{{ $product->qtd_estoque }}" required >
        <br><br>
        <input type="submit" name="EDITAR" value="EDITAR" class="">
    </form>
    <hr>



</body>
</html>
