<?php

include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $nama = trim($_POST['nama']);
    $genre = trim($_POST['genre']);
    $author = trim($_POST['author']);

    if (empty($nama) || empty($genre) || empty($author)) {
        echo "<script>alert('Semua field harus diisi.'); window.location.href='index.php';</script>";
        exit;
    }

    $conn = connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");

    $tsql = "INSERT INTO Komik (NamaKomik, Genre, Author) VALUES (?, ?, ?)";
    $params = array($nama, $genre, $author);
    $stmt = sqlsrv_query($conn, $tsql, $params);

    if ($stmt === false) {
        $error = print_r(sqlsrv_errors(), true);
        echo "<script>alert('Terjadi kesalahan saat menambahkan data: handleUploadResponse($error)');</script>";
    } else {
        echo "Data berhasil ditambahkan.";
    }

    header('location:index.php');
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}


?>