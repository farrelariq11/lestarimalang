<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lestari Malang</title>
    @vite('resources/css/app.css') <!-- Tambahkan jika pakai Laravel Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Pastikan body dan html tidak memiliki margin */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>
</head>
<body class="w-screen h-screen flex items-center justify-center bg-white">
    <div class="flex w-full h-full bg-white">
        <!-- Left Section -->
        <div class="w-1/2 flex flex-col justify-between p-10 bg-white">
            <div class="text-3xl font-extrabold text-[#276561]">
                <span class="text-[#09c25a]">Lestari </span>Malang
            </div>
            <img src="{{ asset('img/login.jpg') }}" alt="Illustration" class="w-full max-w-sm mx-auto">
            <div class="text-center text-[#276561] text-2xl font-extrabold">
                Starts for free and get <br> attractive offers
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 flex flex-col justify-center items-center bg-[#276561] p-8 min-h-screen">
            <h2 class="text-4xl font-extrabold text-white mb-8">Login.</h2>
            <form action="{{ route('submitlogin') }}" method="POST" class="w-full max-w-md space-y-5">
                @csrf
                <div class="w-full bg-white rounded-lg flex items-center px-4 py-3">
                    <input
                        type="text"
                        name="email"
                        placeholder="Email"
                        class="w-full text-lg text-gray-500 focus:outline-none"
                    >
                </div>
                <div class="w-full bg-white rounded-lg flex items-center px-4 py-3">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        class="w-full text-lg text-gray-500 focus:outline-none"
                    >
                </div>
                <button
                    type="submit"
                    class="w-full bg-white text-[#276561] text-xl font-bold rounded-lg py-3 border border-[#276561] hover:bg-gray-100 transition duration-300"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
