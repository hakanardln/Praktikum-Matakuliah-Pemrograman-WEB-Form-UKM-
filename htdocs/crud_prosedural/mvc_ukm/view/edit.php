<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6 bg-gray-100">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Edit Anggota</h1>

        <form action="index.php?action=update" method="POST" class="space-y-3">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <input type="text" name="nama" value="<?=
                htmlspecialchars($data['nama']) ?>" class="border p-2 w-full" required>
            <input type="email" name="email" value="<?=
                htmlspecialchars($data['email']) ?>" class="border p-2 w-full" required>
            <input type="text" name="hp" value="<?= htmlspecialchars($data['hp'])
                ?>" class="border p-2 w-full">

            <div>
                <label><input type="radio" name="jk" value="L" <?=
                    $data['jk'] == 'L' ? 'checked' : '' ?>> Laki-laki</label>
                <label class="ml-4"><input type="radio" name="jk" value="P" <?=
                    $data['jk'] == 'P' ? 'checked' : '' ?>>
                    Perempuan</label>
            </div>

            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded w-full">
                Update
            </button>
        </form>
    </div>
</body>

</html>