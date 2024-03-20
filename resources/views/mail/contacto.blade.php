<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - MiGlobal</title>
    <style>
        /* Estilos CSS para darle formato al correo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalles del Contacto</h2>
        @if(!empty($request->name))
            <p><strong>Nombre:</strong> {{ $request->name }}</p>
        @endif
        @if(!empty($request->company))
            <p><strong>Compañía:</strong> {{ $request->company }}</p>
        @endif
        @if(!empty($request->phone))
            <p><strong>Teléfono:</strong> {{ $request->phone }}</p>
        @endif
        @if(!empty($request->email))
            <p><strong>Email:</strong> {{ $request->email }}</p>
        @endif
        @if(!empty($request->ori))
            <p><strong>Origen:</strong> {{ $request->ori }}</p>
        @endif
        @if(!empty($request->dest))
            <p><strong>Destino:</strong> {{ $request->dest }}</p>
        @endif
        @if(!empty($request->message))
            <p><strong>Mensaje:</strong> {{ $request->message }}</p>
        @endif
    </div>
</body>
</html>
