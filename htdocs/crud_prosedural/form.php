<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4 text-center">Form Tambah Anggota</h1>
    <form action="insert.php" method="POST" class="space-y-3 max-w-md mx-auto bg-white p-6 rounded shadow">
        <input type="text" name="nama" placeholder="Nama Lengkap" class="border p-2 w-full" required>
        <input type="email" name="email" placeholder="Email" class="border p-2 w-full" required>
        <input type="text" name="hp" placeholder="Nomor HP" class="border p-2 w-full">
        <input type="password" name="password" placeholder="Password" class="border p-2 w-full" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full">Simpan</button>
    </form>
</body>

</html>