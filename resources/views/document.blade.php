@extends('/template')

@section('content')
    
    <h1 class="text-center">Crud</h1> <hr>

    <div class="col-8 m-auto">
        <a href="{{url('documentos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Tamanho (MB)</th>
                <th scope="col">N assinatura</th>
                <th scope="col">Assinatura responsavel</th>
                <th scope="col">Quantidade de pagina</th>
            </tr>
            </thead>
            <tbody>

            @foreach($doc as $documento)
                <tr>
                    <th scope="row">{{$documento->id}}</th>
                    <td>{{$documento->titulo}}</td>
                    <td>{{$documento->tamanho_documento}}</td>
                    <td>{{$documento->numero_assinatura}}</td>
                    <td>{{$documento->assinatura_responsavel}}</td>
                    <td>{{$documento->quantidade_pagina}}</td>
                    <td>
                    <a href="{{url('documentos/visualizar')}}">
                            <button class="btn btn-primary">Visualizar</button>
                        </a>                        

                        <a href="">
                            <button class="btn btn-primary">Editar</button>
                        </a>

                        <a href="">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection