<?php
require 'koneksi.php';
$id = $_POST['id'];
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$hp = htmlspecialchars($_POST['hp']);
$stmt = $conn->prepare("UPDATE anggota SET nama=?, email=?, hp=? WHERE 
id=?");
$stmt->bind_param("sssi", $nama, $email, $hp, $id);
$stmt->execute();
header("Location: tampil.php");