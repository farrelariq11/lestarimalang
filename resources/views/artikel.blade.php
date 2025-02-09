<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Lestari Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-4 flex justify-between items-center px-8">
        <div class="left-[60px] text-center">
            <span class="text-[#09c25a] text-[28px] font-bold font-['Inter']">Lestari </span>
            <span class="text-black text-[28px] font-bold font-['Inter']">Malang.</span>
        </div>

        <div class="flex space-x-8 ml-auto">
            <a href="/dashboard" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Home</a>
            <a href="/artikel" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Article</a>
            <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Maps</a>
            <a href="/report" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Report</a>
        
            @if(session('user_email'))
                <div class="flex items-center space-x-4">
                    <i class="fas fa-user text-black text-2xl" title="{{ session('user_email') }}"></i>
                </div>
            @else
            @endif
        </div>

        <div class="w-7 h-7 overflow-hidden"> </div>
    </nav>
    <div class="max-w-6xl mx-auto mt-10 p-5">
        <h2 class="text-3xl font-bold text-gray-800 mb-5">Artikel</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-green-500 p-5 rounded-lg shadow-lg">
                <img src="article-image.jpg" alt="Artikel" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold text-white mt-3">Mengurangi Food Waste di Kota Malang</h3>
                <p class="text-white text-sm mt-2">Kolaborasi dan Peran Masyarakat</p>
                <a href="#" class="mt-4 block bg-white text-green-600 text-center py-2 rounded-lg font-semibold hover:bg-gray-200">Selanjutnya</a>
            </div>
            <div class="bg-green-500 p-5 rounded-lg shadow-lg">
                <img src="article-image.jpg" alt="Artikel" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold text-white mt-3">Mengurangi Food Waste di Kota Malang</h3>
                <p class="text-white text-sm mt-2">Kolaborasi dan Peran Masyarakat</p>
                <a href="#" class="mt-4 block bg-white text-green-600 text-center py-2 rounded-lg font-semibold hover:bg-gray-200">Selanjutnya</a>
            </div>
            <div class="bg-green-500 p-5 rounded-lg shadow-lg">
                <img src="article-image.jpg" alt="Artikel" class="w-full h-40 object-cover rounded-lg">
                <h3 class="text-lg font-semibold text-white mt-3">Mengurangi Food Waste di Kota Malang</h3>
                <p class="text-white text-sm mt-2">Kolaborasi dan Peran Masyarakat</p>
                <a href="#" class="mt-4 block bg-white text-green-600 text-center py-2 rounded-lg font-semibold hover:bg-gray-200">Selanjutnya</a>
            </div>
        </div>
    </div>
</body>
</html>
