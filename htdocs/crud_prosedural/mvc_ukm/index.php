<?php 
require "koneksi.php"; 
require "controller/AnggotaController.php"; 

$controller = new AnggotaController(); 
$action = $_GET['action'] ?? 'index'; 

if ($action === 'create') $controller->create(); 
elseif ($action === 'store') $controller->store($conn); 
elseif ($action === 'edit') $controller->edit($conn, $_GET['id']); 
elseif ($action === 'update') $controller->update($conn); 
elseif ($action === 'delete') $controller->destroy($conn, $_GET['id']); 
else $controller->index($conn);