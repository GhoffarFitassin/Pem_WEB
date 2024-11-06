<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    $id = 0;
}

if ($id > 0) {
    $conn = connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");
    $tsql = "DELETE FROM Komik WHERE KomikID = ?";
    $params = array($id);
    $stmt = sqlsrv_query($conn, $tsql, $params);

    echo "<script>alert('Data berhasil dihapus.'); window.location.href='index.php';</script>";

    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
} else {
    echo "<script>alert('ID tidak valid.'); window.location.href='index.php';</script>";
}

?>