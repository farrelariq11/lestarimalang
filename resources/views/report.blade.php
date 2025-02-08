<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Report - Lestari Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-4 flex justify-between items-center px-8">
        <div class="left-[60px] text-center">
            <span class="text-[#09c25a] text-[28px] font-bold font-['Inter']">Lestari </span>
            <span class="text-black text-[28px] font-bold font-['Inter']">Malang.</span>
        </div>

        <div class="flex space-x-8 ml-auto">
            <a href="/dashboard" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Home</a>
            <a href="/artikel" class="text-gray-800 hover:text-green-600 text-2xl font-bold font-['Inter']">Article</a>
            <a href="#" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Maps</a>
            <a href="/report" class="text-black text-2xl font-bold font-['Inter'] hover:text-[#09c25a]">Report</a>
        </div>

        <div class="w-7 h-7 overflow-hidden"> </div>
    </nav>

    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-5">Form Report</h2>
        <form action="#" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" class="w-full border rounded-lg p-2" placeholder="Masukkan nama lengkap">
                </div>
                <div>
                    <label class="block text-gray-700">Jenis Kelamin</label>
                    <select class="w-full border rounded-lg p-2">
                        <option>Pilih Jenis Kelamin</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Tanggal Lahir</label>
                    <input type="date" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-gray-700">No. Telepon</label>
                    <input type="text" class="w-full border rounded-lg p-2" placeholder="08xxxxx">
                </div>
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="w-full border rounded-lg p-2" placeholder="email@example.com">
                </div>
                <div>
                    <label class="block text-gray-700">Provinsi</label>
                    <select class="w-full border rounded-lg p-2">
                        <option>Pilih Provinsi</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Kota/Kabupaten</label>
                    <select class="w-full border rounded-lg p-2">
                        <option>Pilih Kota/Kabupaten</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Profesi</label>
                    <select class="w-full border rounded-lg p-2">
                        <option>Pilih Profesi</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700">Institusi Profesi</label>
                    <input type="text" class="w-full border rounded-lg p-2" placeholder="Institusi Profesi">
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700">Biografi</label>
                <textarea class="w-full border rounded-lg p-2" rows="4" placeholder="Tulis Biografi..."></textarea>
            </div>
            <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">Submit</button>
        </form>
    </div>
</body>
</html>