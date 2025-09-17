<?php 
require 'koneksi.php'; 

// Ambil data dari form 
$nama = htmlspecialchars($_POST['nama']); 
$email = htmlspecialchars($_POST['email']); 
$hp = htmlspecialchars($_POST['hp']); 
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

// Simpan ke database 
$stmt = $conn->prepare("INSERT INTO anggota (nama, email, hp, password) 
VALUES (?,?,?,?)"); 
$stmt->bind_param("ssss", $nama, $email, $hp, $password); 
$stmt->execute(); 

// Redirect kembali ke halaman tampil 
header("Location: tampil.php");