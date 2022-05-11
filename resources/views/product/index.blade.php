<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table{
            text-align: left;
        }

    </style>
</head>
<body>
    <a href="{{ route('product.create') }}">Cadastrar</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>R${{ $product->price }},00</td>
                    <td>
                        <a href="{{ route('product.delete' , $product->id) }}" onclick="event.preventDefault(); document.querySelector('#form-delete-{{ $product->id }}').submit()">Deletar</a>
                        <form action="{{ route('product.delete' , $product->id) }}" method="post" id="form-delete-{{ $product->id }}">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>