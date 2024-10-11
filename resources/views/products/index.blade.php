<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Produtos</title>

    <style>

        td, th {
            border: 1px solid;
        }

    </style>

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
    <h1>Página - Listar Produtos</h1>
    <h2>Lista de Produtos:</h2>
    {{-- <form action=" {{ url('store') }} " method="POST" enctype="multipart/form-data">
        <input type="text">
        <input type="submit" class="">
    </form> --}}

    @if(Session::has('message'))
        <div role="alert">

            <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>

        </div>
    @endif

    <hr>
    <ul>
        {{-- Esse aqui pe que é o Blade --}}
        {{-- @foreach ($productList as $productName)

        <li> {{ $productName }} </li>

        @endforeach --}}
    </ul>

    <table>
        <thead>
            <tr>
                <th>ID:.</th>
                <th>NOME</th>
                <th>CATEGORIA</th>
                <th>QTD.ESTOQUE</th>
                <th>VALOR</th>
                <th>EDITAR</th>
                <th>DELETAR</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)

              <tr>
                <td> {{ $product->id }} </td>
                <td> {{ $product->nome_produto }} </td>
                <td> {{ $product->categoria }} </td>
                <td> {{ $product->qtd_estoque }} </td>
                <td> R${{ $product->valor_venda }} </td>
                <td>
                    <a href=" {{ url('/edit/product', $product->id) }} "><button  class="btn btn-primary">Editar</button></a>

                </td>
                <td>
                    {{-- A ação de deletar requer um método DELETE po padrão, por isso precisa ser passado através de um FORM --}}
                   <form action=" {{ url('/delete/product', $product->id) }} " method="post">

                    @csrf
                    @method('DELETE')
                    <a href=" {{ url('/delete/product', $product->id) }} "><button type="submit"  class="btn btn-primary">DELETAR</button></a>

               </form>

                </td>

              </tr>

            @endforeach
        </tbody>
    </table>

</body>
</html>
