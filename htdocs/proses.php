//PENTINGNYA VALIDASI SERVER-SIDE (PHP)
//Validasi di sisi client (JavaScript) hanya membantu pengguna agar cepat tahu kalau ada kesalahan, tapi bisa dimatikan atau dilewati.
//Karena itu, validasi di sisi server (PHP) tetap WAJIB dilakukan untuk:
//Memastikan data yang masuk ke server benar dan sesuai aturan.
//Mencegah data palsu atau input sembarangan dari pengguna nakal.
//Melindungi aplikasi dari serangan, misalnya SQL Injection atau XSS.
//Jadi walaupun sudah ada validasi di form (JavaScript), server harus tetap mengecek ulang

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $hp = htmlspecialchars(trim($_POST['hp']));
    $jk = isset($_POST['jk']) ? htmlspecialchars($_POST['jk']) : null;
    $password = htmlspecialchars(trim($_POST['password']));
    $provinsi = $_POST['provinsi'] ?? null;
    $kabupaten = $_POST['kabupaten'] ?? null;
    $errors = [];
    if (strlen($nama) < 3)
        $errors[] = "Nama minimal 3 karakter.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors[] = "Email tidak valid.";
    if (!preg_match("/^[0-9]{10,}$/", $hp))
        $errors[] = "Nomor HP minimal 10 digit angka.";
    if (!$jk)
        $errors[] = "Jenis kelamin harus dipilih.";
    if (!$provinsi || !$kabupaten)
        $errors[] = "Provinsi dan kabupaten harus dipilih.";
    if (strlen($password) < 8)
        $errors[] = "Password minimal 8 karakter.";
    if (!empty($errors)) {
        echo "<h3>Kesalahan Input:</h3><ul>";
        foreach ($errors as $e)
            echo "<li>$e</li>";
        echo "</ul><a href='form.html'>Kembali</a>";
        exit;
    }
    $_SESSION['user'] = compact(
        'nama',
        'email',
        'hp',
        'jk',
        'provinsi',
        'kabupaten'
    );
    header("Location: sukses.php");
    exit;
}
?>