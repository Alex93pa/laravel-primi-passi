<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONTATTI</h1>
    <form action="">

        <input type="text" value="{{ $name }}">
        <input type="text" value="{{ $surname }}">
        <input type="text" value="{{ $email }}">

    </form>
    <button>
    <a href="{{ route('home') }}">Torna alla pagina iniziale </a>
    </button>
</body>
</html>