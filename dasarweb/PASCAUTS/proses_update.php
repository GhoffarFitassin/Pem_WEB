<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = trim($_POST['id']);
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $genre = isset($_POST['genre']) ? trim($_POST['genre']) : '';
    $author = isset($_POST['author']) ? trim($_POST['author']) : '';

    if (!$id || !$nama || !$genre || !$author) {
        echo "<script>alert('Semua field harus diisi.'); window.history.back();</script>";
        exit; 
    }

    $conn = connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");

    $tsql = "UPDATE Komik SET NamaKomik = ?, Genre = ?, Author = ? WHERE KomikID = ?";
    $params = array($nama, $genre, $author, $id);
    $stmt = sqlsrv_query($conn, $tsql, $params);

    if ($stmt === false) {
        $error = print_r(sqlsrv_errors(), true);
        echo "<script>alert('Terjadi kesalahan saat memperbarui data: $error'); window.history.back();</script>";
    } else {
        echo "<script>alert('Data berhasil diperbarui.');window.location.href='index.php';</script>";
    }

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}
?>