<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud com Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<h1 class="text-center">@if(isset($documento))Editar @else Cadastrar @endif</h1> <hr>

<div class="col-8 m-outo">

    @if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
    
    @endif

    @if(isset($documento))
        <form name="formEdit" id="formEdit" method="POST" action="{{url("documentoss/$documento->id")}}">
        @method('PUT')
    @else
        <form name="formCad" id="formCad" method="POST" action="{{url('documentoss')}}">
    @endif

        @csrf
        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo:" value="{{$documento->titulo ?? ''}}" ><br>
        <input class="form-control" type="text" name="tamanho_documento" id="tamanho_documento" placeholder="Tamanho documento" value="{{$documento->tamanho_documento ?? ''}}"><br>
        <input class="form-control" type="text" name="numero_assinatura" id="numero_assinatura" placeholder="N assinatura" value="{{$documento->numero_assinatura ?? ''}}"><br>
        <input class="form-control" type="text" name="assinatura_responsavel" id="assinatura_responsavel" placeholder="Assinatura do responsavel" value="{{$documento->assinatura_responsavel ?? ''}}"><br>
        <input class="form-control" type="text" name="quantidade_pagina" id="quantidade_pagina" placeholder="Quantidade de paginas" value="{{$documento->quantidade_pagina ?? ''}}"><br>
        <input class="btn btn-primary" type="submit" value="@if(isset($documento))Editar @else Cadastrar @endif">
    </form>    
    </form>
</div>

</body>
</html>