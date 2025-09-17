<?php
require 'koneksi.php';
$result = $conn->query("SELECT * FROM anggota");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6 bg-gray-50">
    <h1 class="text-2xl font-bold mb-4">Daftar Anggota</h1>
    <a href="form.php" class="bg-green-600 text-white px-4 py-2 rounded">Tambah</a>
    <table class="border-collapse border border-gray-400 w-full mt-4">
        <tr class="bg-gray-200">
            <th class="border p-2">Nama</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td class="border p-2"><?= htmlspecialchars($row['nama']) ?></td>
                <td class="border p-2"><?= htmlspecialchars($row['email']) ?></td>
                <td class="border p-2">
                    <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue 600">Edit</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-600"
                        onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        <?php if ($result->num_rows === 0): ?>
            <tr>
                <td colspan="3" class="border p-2 text-center">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>