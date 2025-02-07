<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover" style="background-image: url('{{ asset('img/bgdashboard.jpeg') }}');">
    <div class="w-[1440p] h-[1024px] relative overflow-hidden">
        <div class="w-[100vw] h-24 left-0 top-0 absolute bg-white flex justify-between items-center px-8">
            <div class="left-[60px] text-center">
                <span class="text-[#09c25a] text-[28px] font-bold font-['Inter']">Lestari </span>
                <span class="text-black text-[28px] font-bold font-['Inter']">Malang.</span>
            </div>

            <div class="flex space-x-8 ml-auto">  <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Home</a>
                <a href="#" class="text-[#09c25a] text-2xl font-bold font-['Inter']">Article</a>
                <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Maps</a>
                <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Report</a>
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