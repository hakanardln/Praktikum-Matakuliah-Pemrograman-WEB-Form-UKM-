<?php
require_once __DIR__ . '/../model/Anggota.php';

class AnggotaController
{

    public function index($conn)
    {
        $anggota = Anggota::all($conn);
        include __DIR__ . '/../view/tampil.php';
    }

    public function create()
    {
        include __DIR__ . '/../view/tambah.php';
    }

    public function store($conn)
    {
        $data = [
            'nama' => htmlspecialchars($_POST['nama']),
            'email' => htmlspecialchars($_POST['email']),
            'hp' => htmlspecialchars($_POST['hp']),
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'jk' => htmlspecialchars($_POST['jk'])
        ];
        Anggota::store($conn, $data);
        header("Location: index.php");
    }

    public function edit($conn, $id)
    {
        $data = Anggota::find($conn, $id);
        include __DIR__ . '/../view/edit.php';
    }

    public function update($conn)
    {
        $data = [
            'id' => $_POST['id'],
            'nama' => htmlspecialchars($_POST['nama']),
            'email' => htmlspecialchars($_POST['email']),
            'hp' => htmlspecialchars($_POST['hp']),
            'jk' => htmlspecialchars($_POST['jk'])
        ];
        Anggota::update($conn, $data);
        header("Location: index.php");
    }

    public function destroy($conn, $id)
    {
        Anggota::delete($conn, $id);
        header("Location: index.php");
    }
}