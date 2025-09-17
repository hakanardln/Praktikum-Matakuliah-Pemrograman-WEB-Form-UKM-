<?php
require_once __DIR__ . '/../koneksi.php';
class Anggota
{
    public static function all($conn)
    {
        return $conn->query("SELECT * FROM anggota");
    }
    public static function find($conn, $id)
    {
        $stmt = $conn->prepare("SELECT * FROM anggota WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public static function store($conn, $data)
    {
        $stmt = $conn->prepare("INSERT INTO anggota 
(nama,email,hp,password,jk) VALUES (?,?,?,?,?)");
        $stmt->bind_param(
            "sssss",
            $data['nama'],
            $data['email'],
            $data['hp'],
            $data['password'],
            $data['jk']
        );
        return $stmt->execute();
    }
    public static function update($conn, $data)
    {
        $stmt = $conn->prepare("UPDATE anggota SET nama=?, email=?, hp=?, 
jk=? WHERE id=?");
        $stmt->bind_param(
            "ssssi",
            $data['nama'],
            $data['email'],
            $data['hp'],
            $data['jk'],
            $data['id']
        );
        return $stmt->execute();
    }
    public static function delete($conn, $id)
    {
        $stmt = $conn->prepare("DELETE FROM anggota WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}