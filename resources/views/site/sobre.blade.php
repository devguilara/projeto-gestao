<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Sobre</title>
</head>
<body>
    <h3>Sobre(view)</h3>
    <ul>
        <li>
            <a href="{{ route('site.index') }}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site.sobre') }}">Sobre Nós</a>
        </li>
        <li>
            <a href="{{ route('site.contato') }}">Contato</a>
        </li>
    </ul>
</body>
</html>