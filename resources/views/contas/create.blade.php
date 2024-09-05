<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>
</head>

<body>

    <a href="{{ route('conta.index')}}">Listar</a><br>

    <h2>Cadastra a Conta</h2>

    <form action="{{route('conta.store')}}" method="post">
        @csrf

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>

        
        <label for="valor">Valor: </label>
        <input type="text" name="valor" id="valor" required>

        
        <label for="vencimento">Vencimento: </label>
        <input type="date" name="vencimento" id="vencimento" required>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>
