<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Direcciones</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Listado de Direcciones</h1>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Calle</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Número</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Ciudad</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Código Postal</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($direcciones as $direccion)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $direccion->calle }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $direccion->numero }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $direccion->ciudad }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $direccion->estado }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $direccion->codigo_postal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $direcciones->links() }}
        </div>
    </div>
</body>
</html>