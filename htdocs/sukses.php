<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg p-6 rounded-lg max-w-md text-center space-y-
4">
        <h1 class="text-2xl font-bold text-green-700">Pendaftaran Berhasil!</h1>
        <p class="text-gray-700">Terima kasih, <span class="font-semibold">
                <?=
                    htmlspecialchars($user['nama']) ?>
            </span>.<br>
            Data Anda sudah kami terima.</p>
        <div class="border-t pt-3 text-sm text-gray-600">
            <p>Email: <?= htmlspecialchars($user['email']) ?></p>
            <p>HP: <?= htmlspecialchars($user['hp']) ?></p>
            <p>Provinsi: <?= htmlspecialchars($user['provinsi']) ?></p>
            <p>Kabupaten: <?= htmlspecialchars($user['kabupaten']) ?></p>
        </div>
        <a href="form.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4
py-2 rounded inline-block">
            Kembali ke Form
        </a>
    </div>
</body>

</html>