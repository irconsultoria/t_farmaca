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

    <h1>Colaboradores</h1>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>CPF</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Salario Atual</td>
            <td>Ações</td>
        </tr>
        </thead>
        <tbody>
        @foreach($colaboradores as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->cpf }}</td>
                <td>{{ $value->nome }}</td>
                <td>{{ $value->email }}</td>
                @if(isset($value->historico_salarios[0]["valor"]))
                    <td>{{ $value->historico_salarios[0]["valor"] }}</td>
                @else
                    <td>Salario Não vinculado</td>
                @endif
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('colaboradores/' . $value->id) }}">Ver
                        Historico</a>


                    {{--                    <a class="btn btn-small btn-warning" href="{{ URL::to('colaboradores/' . $value->id . '/edit') }}">Editar</a>--}}

                    {{ Form::open(array('url' => 'colaboradores/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
