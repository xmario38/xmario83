<?php
session_start();
require_once 'Admin.php';

$admin = new Admin;

// jika session id belum di set, maka kembalikan ke halaman login
if(!isset($_SESSION['id'])) {
    header('Location: ../../');
}

$id = $_SESSION['id'];

$data = $admin->getDataPetugas($id);
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <style type="text/css" >
        li {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <Cennter>
        <ul style="display:flex; list-style:none; margin-top:30px; margin-left:45px;">
            <li><b>Aplikasi Pembayaran SPP</b></li>
            <li><a href="?p=siswa">Data Siswa</a></li>
            <li><a href="?p=petugas">Data Petugas</a></li>
            <li><a href="?p=spp">Data SPP</a></li>
            <li><a href="?p=logout">Logout</a></li>
        </ul>
    </Cennter>