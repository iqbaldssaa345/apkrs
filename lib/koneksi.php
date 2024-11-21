<?php
$host     = "localhost";              
$username = "root";                   
$password = "12345678";                     
$dbname = "rs";            

try{
    // Membuat koneksi dengan PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set mode error PDO untuk menampilkan exeception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    // Menangkap error jika koneksi gagal
    echo "koneksi gagal: " . $e->getMessage();
}