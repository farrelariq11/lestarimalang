<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Report - Lestari Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <nav class="bg-white p-4 flex justify-between items-center px-8">
        <div class="left-[60px] text-center">
            <span class="text-[#09c25a] text-[28px] font-bold font-['Inter']">Lestari </span>
            <span class="text-black text-[28px] font-bold font-['Inter']">Malang.</span>
        </div>
    </nav>
    
    <div class="max-w-4xl mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-5">Form Report</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" class="w-full border rounded-lg p-2" placeholder="Masukkan nama lengkap">
                </div>
                <div>
                    <label class="block text-gray-700">Foto</label>
                    <input type="file" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Keterangan</label>
                    <textarea class="w-full border rounded-lg p-2" rows="4" placeholder="Masukkan keterangan..."></textarea>
                </div>
                <div>
                    <label class="block text-gray-700">Lokasi</label>
                    <input type="text" class="w-full border rounded-lg p-2" placeholder="Masukkan lokasi">
                </div>
            </div>
            <button class="mt-4 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">Submit</button>
        </form>
    </div>
</body>
</html>
