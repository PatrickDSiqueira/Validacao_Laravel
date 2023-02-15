<html>
<head>
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2 ">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Clientes
                    </div>
                </div>
            <div class="card-body">
                <form action="/cliente" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do Cliente</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente">
                    </div>
                    <div class="form-group">
                        <label for="idade">Idade do Cliente</label>
                        <input type="number" name="idade" id="idade" class="form-control" placeholder="Idade do Cliente">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço do Cliente</label>
                        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço do Cliente">
                    </div>
                    <div class="form-group">
                        <label for="email">Email do Cliente</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail do Cliente">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a type="cancel" class="btn btn-danger btn-sm" href="/cliente">Cancelar</a>
                </form>
            </div>
            </div>
        </div>
    </div>

</main>
<script src="{{asset('js/app.css')}}" type="text/javascript"></script>
</body>
</html>
