<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('auth')}}" method="post">
                        @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(session('danger'))
                                    <div class="alert alert-danger">
                                        {{session('danger')}}
                                    </div>
                                @endif
                                <label for="exampleInputEmail1" class="text-info">E-mail:</label><br>
                                <input type="email" name="email" id="exampleInputEmail1" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-info">Senha:</label><br>
                                <input type="password" name="password" id="exampleInputPassword1" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>