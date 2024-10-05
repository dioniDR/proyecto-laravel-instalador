<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo - Mi Proyecto Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-4">{{ $message }}</h1>
        <p class="text-gray-600">Bienvenido a mi proyecto Laravel.</p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>