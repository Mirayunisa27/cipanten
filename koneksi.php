<?php
// Koneksi ke database
$host = "localhost"; // Host database Anda
$user = "root"; // Username database Anda
$password = ""; // Password database Anda
$database = "wisatacipanten"; // Nama database Anda

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ambil data dari form dan validasi
$nama_pemesanan = isset($_POST['nama_pemesanan']) ? $conn->real_escape_string($_POST['nama_pemesanan']) : '';
$hp_pemesan = isset($_POST['hp_pemesan']) ? $conn->real_escape_string($_POST['hp_pemesan']) : '';
$tanggal_pemesanan = isset($_POST['tanggal_pemesanan']) ? $conn->real_escape_string($_POST['tanggal_pemesanan']) : null;
$kategori = isset($_POST['kategori']) ? json_encode($_POST['kategori'], JSON_UNESCAPED_UNICODE) : '[]';
$destinasi = isset($_POST['destinasi']) ? json_encode($_POST['destinasi'], JSON_UNESCAPED_UNICODE) : '[]';
$kulineran = isset($_POST['kulineran']) ? json_encode($_POST['kulineran'], JSON_UNESCAPED_UNICODE) : '[]';
$seat_number = isset($_POST['seat_number']) ? $conn->real_escape_string($_POST['seat_number']) : null;
$jumlah_peserta = isset($_POST['jumlah_peserta']) ? intval($_POST['jumlah_peserta']) : 1;
$total_harga = isset($_POST['total_harga']) ? preg_replace('/[^0-9]/', '', $_POST['total_harga']) : 0; // Hapus format Rp.

// Query untuk menyimpan data
$sql = "INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, tanggal_pemesanan, kategori, destinasi, kulineran, seat_number, jumlah_peserta, total_harga) 
        VALUES ('$nama_pemesanan', '$hp_pemesan', '$tanggal_pemesanan', '$kategori', '$destinasi', '$kulineran', " . 
        ($seat_number ? "'$seat_number'" : "NULL") . ", $jumlah_peserta, $total_harga)";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Data berhasil disimpan!</h3>";
} else {
    echo "Terjadi kesalahan: " . $conn->error . "<br>";
    echo "SQL: " . $sql . "<br>";
}

