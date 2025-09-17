<?php 
$conn = mysqli_connect("localhost", "root", "12345678", "ukm_db"); 
if (!$conn) { 
die("Koneksi gagal: " . mysqli_connect_error()); 
} 
?> 