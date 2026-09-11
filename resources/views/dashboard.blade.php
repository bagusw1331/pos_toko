<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - {{ config('app.name', 'POS Barokah Mart') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">
    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center shadow-sm">
        <div class="flex items-center space-x-3">
            <span class="text-xl font-bold text-emerald-600">🏪 POS Barokah Mart</span>
            <span class="text-xs bg-emerald-100 text-emerald-800 px-2.5 py-0.5 rounded-full font-medium">Dashboard</span>
        </div>
        <div class="flex items-center space-x-4 text-sm text-gray-600">
            <span>Selamat Datang di Sistem POS</span>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-8">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Dashboard POS Barokah Mart</h1>
            <p class="text-gray-600">Struktur awal dashboard..</p>
        </div>
    </main>
</body>
</html>
