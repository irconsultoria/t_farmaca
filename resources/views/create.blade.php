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

    <h1>Novo Colaborador</h1>

    {{ HTML::ul($errors->all()) }}

    {{ FORM::open(array('url' => 'colaboradores')) }}

    <div class="form-group">
        {{ FORM::label('nome', 'Nome') }}
        {{ FORM::text('nome', Input::old('nome'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ FORM::label('email', 'Email') }}
        {{ FORM::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ FORM::label('cpf', 'CPF') }}
        {{ FORM::text('cpf', Input::old('cpf'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ FORM::label('rg', 'RG') }}
        {{ FORM::text('rg', Input::old('rg'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ FORM::label('cep', 'CEP') }}
        {{ FORM::text('cep', Input::old('cep'), array('class' => 'form-control')) }}
    </div>    <div class="form-group">
        {{ FORM::label('endereco', 'Endereço') }}
        {{ FORM::text('endereco', Input::old('endereco'), array('class' => 'form-control')) }}
    </div>    <div class="form-group">
        {{ FORM::label('numero', 'Numero') }}
        {{ FORM::text('numero', Input::old('numero'), array('class' => 'form-control')) }}
    </div>    <div class="form-group">
        {{ FORM::label('cidade', 'Cidade') }}
        {{ FORM::text('cidade', Input::old('cidade'), array('class' => 'form-control')) }}
    </div>
<div class="form-group">
        {{ FORM::label('estado', 'Estado') }}
        {{ FORM::text('estado', Input::old('estado'), array('class' => 'form-control')) }}
    </div>


    {{ FORM::submit('Criar Colaborador', array('class' => 'btn btn-primary')) }}

    {{ FORM::close() }}

</div>
</body>
</html>
