<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6 bg-gray-100">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Form Tambah Anggota</h1>

        <form action="index.php?action=store" method="POST" class="space-y-3">
            <input type="text" name="nama" placeholder="Nama Lengkap" class="border 
p-2 w-full" required>
            <input type="email" name="email" placeholder="Email" class="border p-2 
w-full" required>
            <input type="text" name="hp" placeholder="Nomor HP" class="border p-2 
w-full">

            <div>
                <label><input type="radio" name="jk" value="L" required> Laki
                    laki</label>
                <label class="ml-4"><input type="radio" name="jk" value="P">
                    Perempuan</label>
            </div>

            <input type="password" name="password" placeholder="Password" class="border p-2 w-full" required>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded w-full">
                Simpan
            </button>
        </form>
    </div>
</body>

</html>