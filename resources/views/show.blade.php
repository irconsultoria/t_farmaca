<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Colaboradores</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">

        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('colaboradores') }}">Listar</a></li>
            <li><a href="{{ URL::to('colaboradores/create') }}">Novo</a>
        </ul>
    </nav>

    <h1> {{ $colaborador[0]->nome }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Email:</strong> {{ $colaborador[0]->email }}<br>
            <strong>CPF:</strong> {{ $colaborador[0]->cpf }}
        </p>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Salario</td>
            <td>Data</td>
        </tr>
        </thead>
        <tbody>
        @foreach($colaborador[0]->historico_salarios as $key => $value)
            <tr>
                <td>{{ $value->valor }}</td>
                <td>{{ $value->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
