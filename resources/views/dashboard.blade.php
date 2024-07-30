<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="flex bg-gray-100 flex-col">
    
        @if(session()->has('success'))
            <div class="w-48 h-16 flex justify-center items-center bg-green-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('success') }}
            </div>
        @endif
    <h1 class="text-red-500">Ini halaman Dashboard</h1>
</body>
</html>