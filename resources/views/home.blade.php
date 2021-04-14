<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{ asset('js/noticias.js') }}"></script>
</head>

<body style="background-color: #e9ecef;">
    <div class="container-fluid bg-white">
        <div class="p-2 row justify-content-end" style="border-top: 6px solid #0d8efd;">
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="noticias" placeholder="Buscar ">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="tableNoticias()" ><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-md">
        <div class="row">
            @foreach ($noticias as $noticia)
                <div class="col-md-4 col-sm-4 col-xs-12 pt-2 pb-3">
                    <div class="card">
                        <img class="m-auto p-1 shadow-sm" style="border-radius: 10px;width: 18rem;"
                            src="{{ asset("/$noticia->img") }}" alt="{{ $noticia->titulo }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $noticia->titulo }}</h5>
                            <p class="card-text"> {{ Str::substr($noticia->texto, 0, 150) }}...</p>
                            <a href="#" class="btn btn-primary">Saber Mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
