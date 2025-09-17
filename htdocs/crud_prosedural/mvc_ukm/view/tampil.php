<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6 bg-gray-100">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Daftar Anggota</h1>
        <a href="index.php?action=create" class="bg-green-600 text-white px-4 py-2 rounded">Tambah Anggota</a>
        <table class="table-auto border-collapse border border-gray-400 w-full mt-4">
            <tr class="bg-gray-200">
                <th class="border p-2">Nama</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">HP</th>
                <th class="border p-2">Aksi</th>
            </tr>
            <?php while ($row = $anggota->fetch_assoc()): ?>
                <tr>
                    <td class="border p-2"><?= htmlspecialchars($row['nama']) ?></td>
                    <td class="border p-2"><?= htmlspecialchars($row['email']) ?></td>
                    <td class="border p-2"><?= htmlspecialchars($row['hp']) ?></td>
                    <td class="border p-2">
                        <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="text blue-600 hover:underline">Edit</a> |
                        <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="text red-600 hover:underline" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>