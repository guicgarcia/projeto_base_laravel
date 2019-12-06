<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="freehtml5.co"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>
    
    <link rel="icon" href="">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/signin.css') }}">
    @yield('stylesheet')
</head>
<body>

	<div class="ajax_response"></div>

	<div class="body-login">
		<form class="form-signin" name="login" action="{{ route('admin.register') }}" method="post" autocomplete="off">
		    <div class="text-center">
		    	<h1 class="h3 mb-3 font-weight-normal">Cadastar Usuário</h1>
			</div>

		    <div class="form-group">
		        <label>Usuário</label>
		        <input name="username" type="text" class="form-control" placeholder="Digite o usuário" required/> 
		    </div>
		    <div class="form-group">
		        <label>Senha</label>
		        <input name="password" type="password" class="form-control" placeholder="Digite a senha">
		    </div>
		    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
		</form>
	</div>


	<div class="gototop js-top">
	    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

@yield('scripts')
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/login.js') }}"></script>

</body>
</html>

