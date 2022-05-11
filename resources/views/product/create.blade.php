<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome">

        <label for="price">Prices</label>
        <input type="text" name="price" id="price" placeholder="Price">

        <button>Cadastrar</button>
    </form>

</body>
</html>