<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar Centro de Formación</h1>
    
    <form action="{{ route('training_center.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br><br>

        <label>
        Ubicación:
        <br>
        <input type="text" name="location">
        </label>

        <br><br>

        <button type="submit">Enviar Formulario</button>

    </form>
</body>
</html>