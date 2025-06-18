<?php
session_start(); // Memulai sesi

// Menghapus semua data sesi
$_SESSION = array();

// Menghancurkan sesi
session_destroy();

// Arahkan kembali ke halaman login
header("Location: index.html");
exit;
?>
