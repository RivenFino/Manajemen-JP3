<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col justify-start items-center">
    <div class="w-[800px] h-screen flex flex-col gap-4 justify-start py-24 items-center">
        @if(session()->has('loginError'))
            <div class="w-full h-16 flex justify-center items-center bg-red-600 text-white font-bold text-xl rounded-xl shadow-lg">
                {{ session('loginError') }}
            </div>
        @endif
        <div class="shadow-lg flex bg-gray-50 w-full h-[550px] rounded-xl">
            <div class="w-[300px] flex flex-col justify-start items-center rounded-xl bg-gray-500 py-12 shadow-lg outline-1 outline-gray-400 outline">
                <h2 class="text-3xl text-center font-bold text-blue-50">Register Page</h2>
                <img src="image/skatel_icon.png" alt="Login" class="w-full p-6 pt-24">
            </div>
            <form action="/register" method="post" class="flex flex-col justify-center items-center w-full h-full py-6 gap-6">   
                @csrf
                <div class="w-96 flex flex-col justify-center items-center gap-2">
                    <label for="username" class="text-xl font-medium">Username</label>
                    <input type="text" name="username" autofocus placeholder="User123" required     
                    class="w-full h-12 px-4 text-xl rounded-lg bg-slate-200 outline-1 outline outline-gray-400
                    focus:bg-cyan-50 transition-all">
                </div>
                <div class="w-96 flex flex-col justify-center items-center gap-2">
                    <label for="email" class="text-xl font-medium">Email</label>
                    <input type="text" name="email" autofocus placeholder="User123@gmail.com" required     
                    class="w-full h-12 px-4 text-xl rounded-lg bg-slate-200 outline-1 outline outline-gray-400
                    focus:bg-cyan-50 transition-all">
                </div>
                <div class="w-96 flex flex-col justify-center items-center gap-2">
                    <label for="username" class="text-xl font-medium">Password</label>
                    <input type="password" name="password" placeholder="pass123@" required
                    class="w-full h-12 px-4 text-xl rounded-lg bg-slate-200 outline-1 outline outline-gray-400
                    focus:bg-cyan-50 transition-all">
                </div>
                <button class="w-96 flex flex-col justify-center items-center gap-2 h-12 outline-1 outline-gray-400 outline text-white font-bold uppercase text-2xl rounded-lg bg-slate-400 mt-4
                hover:bg-slate-600 transition-all delay-200">
                    Register
                </button>
                <div class="w-full flex justify-end px-24 h-12">
                    <a href="/login" class="text-2xl font-bold text-blue-400 px-2 underline">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>