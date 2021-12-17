<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-outo">
    <form name="formCad" id="formCad" method="POST" action="{{url('documentos')}}">
        @csrf
        <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Titulo:"><br>
        <input class="form-control" type="text" name="tamanho_documento" id="tamanho_documento" placeholder="Tamanho documento"><br>
        <input class="form-control" type="text" name="numero_assinatura" id="numero_assinatura" placeholder="N assinatura"><br>
        <input class="form-control" type="text" name="assinatura_responsavel" id="assinatura_responsavel" placeholder="Assinatura do responsavel"><br>
        <input class="form-control" type="text" name="quantidade_pagina" id="quantidade_pagina" placeholder="Quantidade de paginas"><br>
        <input class="btn btn-primary" type="submit" value="Cadastra">
    </form>    
    </form>
</div>