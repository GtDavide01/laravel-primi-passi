<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    header {
        justify-content: center;
        align-items: center;
        display: flex;
        height: 100px;
        background-color: orange;
    }

    ul {
        display: flex;
        list-style-type: none;
    }

    li {
        margin: 0 20px
    }

    a {
        text-decoration: none;
    }

    main {
        margin: 100px 0;
        text-align: center;
    }
</style>

<body>
    <header>
        <ul>
            <li><a href="{{ route('home') }}">Torna alla home </a></li>
            <li><a href="{{ route('pagina1laravel') }}">Pagina 1</a></li>
            <li><a href="{{ route('pagina3laravel') }}">Pagina 3</a></li>
        </ul>
    </header>
    <main>
        <h1>Hello World</h1>
        <h2>Sono la seconda pagina!</h2>
    </main>
</body>

</html>
