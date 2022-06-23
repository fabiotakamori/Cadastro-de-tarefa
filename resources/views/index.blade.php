<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Tarefa</title>
        <link type="text/css"  rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body class="lista_de_tarefas">
            <h2>
                <img src="{{asset('Images/logo.png')}}">
                App Lista de Tarefas
            </h2>
            <div id="app">
                <home-component/>
            </div>

            <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
