<!DOCTYPE html>
<html>

<head>
    <title>JE Refrigeracion SAC</title>
</head>

<body>
    <h1>¡Existe un contacto!</h1>
    <p>Nombre: {{ $mailData['name'] }}</p>
    <p>Correo: {{ $mailData['email'] }}</p>
    <p>Celular: {{ $mailData['phone'] }}</p>
    <p>Mensaje: {{ $mailData['message'] }}</p>
</body>

</html>