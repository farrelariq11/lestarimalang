<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-cover" style="background-image: url('{{ asset('img/bgdashboard.jpeg') }}');">
    <div class="w-[1440p] h-[1024px] relative overflow-hidden">
        <div class="w-[100vw] h-20 left-0 top-0 absolute bg-white flex justify-between items-center px-8">
            <div class="left-[60px] text-center">
                <span class="text-[#09c25a] text-[28px] font-bold font-['Inter']">Lestari </span>
                <span class="text-black text-[28px] font-bold font-['Inter']">Malang.</span>
            </div>

            <div class="flex items-center space-x-8 ml-auto">
                <a href="/dashboard" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Home</a>
                <a href="/artikel" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Article</a>
                <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Maps</a>
                <a href="/report" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Report</a>
               @if(session('user_email'))
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-4">
                        <i class="fas fa-user text-black text-2xl" title="{{ session('user_email') }}"></i>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 text-2xl font-bold font-['Inter']">
                            Logout
                        </button>
                    </form>
                </div>
                @else
                <a href="/register" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">
                    <i class="fas fa-user"></i>
                </a>
                @endif
            </div>

            <div class="w-7 h-7 overflow-hidden"> </div>
        </div>

        <div class="left-[60px] top-[291px] absolute">
            <span class="text-[#fdfffc] text-6xl font-bold font-['Inter']">Ayo Lindungi</span>
            <span class="text-[#fdfffc] text-6xl font-bold font-['Inter']">Malang Kota<br/></span>
            <span class="text-[#fdfffc] text-6xl font-bold font-['Inter']">Dari sampah</span>
        </div>
    </div>
</body>
</html>