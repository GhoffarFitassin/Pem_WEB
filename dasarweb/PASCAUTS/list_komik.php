<?php
require_once "config.php";

$conn = connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");

$tsql = "SELECT * FROM Komik";
$datas = sqlsrv_query($conn, $tsql);

if ($datas === false) {
    die("Query failed: " . print_r(sqlsrv_errors(), true));
}

    echo '<table>';
    echo '<thead><tr><th>No</th><th>Judul Komik</th><th>Genre</th><th>Author</th><th>Actions</th></tr></thead>';
    echo '<tbody>';
    $index = 1;
    while ($row = sqlsrv_fetch_array($datas, SQLSRV_FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $index . '</td>';
    echo '<td>' . htmlspecialchars($row['NamaKomik']) . '</td>';
    echo '<td>' . htmlspecialchars($row['Genre']) . '</td>';
    echo '<td>' . htmlspecialchars($row['Author']) . '</td>';
    echo '<td>';
    echo '<a href="update.php?id=' . $row['KomikID'] . '" class="edit-btn">Edit</a>';
    echo '<a href="delete.php?id=' . $row['KomikID'] . '" class="delete-btn" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\');">Delete</a>';
    echo '</td>';
    echo '</tr>';
    $index++;
}
echo '</tbody></table>';

if ($index === 1) {
    echo 'Tidak ada komik yang ditemukan.';
}
?>
