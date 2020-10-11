<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Recibiste un mesaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
    <p>Numero de Telefono: {{ $msg['phone'] }}</p>
    <p>Asunto: {{ $msg['subject'] }}</p>
    <p>Contenido: {{ $msg['message'] }}</p>
    
</body>
</html>