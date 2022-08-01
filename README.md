## Descrição

    Projeto de gestão de colabores, manter colaboradores e um historico de salario.


## Requisitos Para Aplicação

- Docker
- PHP ^8
- Composer

## Passo a Passo

- git clone 'repositorio'
- composer install
- Adicionar Alias do sail (opcional) : alias sail='bash vendor/bin/sail'
- sail build
- sail up
- sail php artisan migrate

## Modelo de requisições

- ENDPOINT http://localhost/salario metodo para salvar o salario : {
"colaborador_id": 3,
"valor": 3000.00
}

- ENDPOINT http://localhost/colaborador/06501372488 metodo para consultar o colaborador Pelo CPF/ID
