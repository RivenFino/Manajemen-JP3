<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    main: ['Montserrat'],
                },
            },

        };
    </script>
</head>
<body class="bg-gray-200 flex flex-col justify-start items-center font-main">
    <div class="w-full h-screen flex flex-col gap-4 justify-center py-24 items-center">
        @if(session()->has('success'))
            <div class="w-full h-16 flex justify-center items-center bg-green-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('success') }}
            </div>
        @endif
        @if(session()->has('loginError'))
            <div class="w-full h-16 flex justify-center items-center bg-red-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="shadow-lg w-[600px] flex flex-col bg-white py-16 rounded-3xl">
            <div class="w-full flex flex-col items-center ">
                <h2 class="text-3xl text-center font-bold text-gray-900 uppercase w-24 flex justify-center items-center">SMK Telkom Banjarbaru</h2>
                <img src="image/skatelIcon.png" alt="Skatel" class="h-48 p-2">
            </div>
            <form action="/login" method="post" class="flex flex-col justify-center items-center w-full h-full px-20 gap-6">   
                @csrf
                <div class="w-full flex flex-col justify-start items-start gap-2">
                    <label for="username" class="text-xl font-semibold">Username</label>
                    <input type="text" name="username" autofocus placeholder="Username" required     
                    class="w-full h-12 px-4 text-xl rounded-2xl outline-1 outline outline-gray-400 focus:bg-slate-200 transition-all">
                </div>
                <div class="w-full flex flex-col justify-start items-start gap-2">
                    <label for="username" class="text-xl font-semibold">Password</label>
                    <input type="password" name="password" placeholder="Password" required
                    class="w-full h-12 px-4 text-xl rounded-2xl focus:bg-slate-200 outline-1 outline outline-gray-400 transition-all">
                </div>
                <button class="w-32 flex flex-col justify-center items-center gap-2 h-10 outline-1 text-white uppercase text-md rounded-lg bg-slate-500 mt-4
                hover:bg-slate-600 transition-all delay-200">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>