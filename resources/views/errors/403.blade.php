<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden - POS Barokah Mart</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-xl shadow-md max-w-md w-full text-center">
        <!-- Ikon Peringatan -->
        <div class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-2">403</h1>
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Akses Ditolak</h2>
        
        <p class="text-gray-500 text-sm mb-6">
            {{ $message ?? 'Anda tidak memiliki hak akses ke halaman ini.' }}
        </p>

        <!-- Keterangan Role Pengguna -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mb-6 text-xs text-gray-600">
            Login sebagai: <strong class="text-gray-800 uppercase">{{ auth()->user()->name ?? 'Pengguna' }}</strong> 
            (Peran: <span class="text-red-500 font-semibold">{{ auth()->user()->role ?? '-' }}</span>)
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ route('dashboard') }}" 
           class="inline-block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg transition duration-150">
            ← Kembali ke Dashboard
        </a>
    </div>
</body>
</html>
