<?php
require 'koneksi.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM anggota WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
header("Location: tampil.php");