<?php
require 'koneksi.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM anggota WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-6">
    <form action="update.php" method="POST" class="space-y-3 max-w-md mx-auto 
bg-white p-6 rounded shadow">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama'])
            ?>" class="border p-2 w-full" required>
        <input type="email" name="email" value="<?=
            htmlspecialchars($data['email']) ?>" class="border p-2 w-full" required>
        <input type="text" name="hp" value="<?= htmlspecialchars($data['hp']) ?>" class="border p-2 w-full">
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded 
w-full">Update</button>
    </form>
</body>

</html>