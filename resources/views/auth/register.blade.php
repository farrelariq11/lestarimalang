<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Lestari Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <div class="w-full h-screen flex overflow-hidden">
        <!-- Left Section -->
        <div class="w-1/2 flex flex-col justify-between px-10 py-8">
            <div class="text-4xl font-extrabold text-[#276561]">
                <span class="text-[#09c25a]">Lestari </span>Malang
            </div>
            <img src="{{ asset('img/register.jpg') }}" alt="Illustration" class="w-[500px] h-[500px] mx-auto">
            <div class="text-center text-[#276561] text-2xl font-extrabold">
                Starts for free and get <br> attractive offers
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 bg-[#276561] flex flex-col justify-center items-center px-10">
            <h2 class="text-5xl font-extrabold text-white mb-4">Get’s started.</h2>
            <p class="text-white text-2xl mb-8">
                Already have an account?
                <a href="{{ route('login') }}" class="font-extrabold underline">Log in</a>
            </p>

            <form action="{{ route('register') }}" method="POST" class="space-y-6 w-full max-w-md">
                @csrf
                <div class="w-full bg-white rounded-[10px] p-4">
                    <input type="text" name="email" placeholder="Email" class="w-full text-2xl font-bold text-[#c7c7c7] focus:outline-none">
                </div>
                <div class="w-full bg-white rounded-[10px] p-4">
                    <input type="text" name="username" placeholder="Username" class="w-full text-2xl font-bold text-[#c7c7c7] focus:outline-none">
                </div>
                <div class="w-full bg-white rounded-[10px] p-4">
                    <input type="password" name="password" placeholder="Password" class="w-full text-2xl font-bold text-[#c7c7c7] focus:outline-none">
                </div>

                <button type="submit" class="w-full bg-white rounded-[10px] border border-[#276561] py-4 text-[#276561] text-2xl font-bold hover:bg-gray-100 transition duration-300">
                    Sign up!
                </button>
            </form>
        </div>
    </div>
</body>
</html>
