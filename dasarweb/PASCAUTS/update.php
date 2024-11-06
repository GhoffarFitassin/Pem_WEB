<?php
    require_once "config.php";
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
    } else {
        $id = 0;
    } 
    
    $nama = $genre = $author = '';
    if ($id > 0) {
        $conn = connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");
        $tsql = "SELECT NamaKomik, Genre, Author FROM Komik WHERE KomikID = ?";
        $params = array($id); 
        $stmt = sqlsrv_query($conn, $tsql, $params);
        
        if ($stmt && sqlsrv_fetch($stmt)) {
            $nama = sqlsrv_get_field($stmt, 0);
            $genre = sqlsrv_get_field($stmt, 1);
            $author = sqlsrv_get_field($stmt, 2);
        }
        
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="upload-form-container">
        <h2>Update Komik</h2>
        <form action="proses_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="file-input-container">
                <label for="nama">Nama Komik: </label>
                <input type="text" name="nama" id="nama" class="file-input" value="<?= htmlspecialchars($nama); ?>">
                <label for="genre">Genre Komik: </label>
                <input type="text" name="genre" id="genre" class="file-input" value="<?= htmlspecialchars($genre); ?>">
                <label for="author">Author Komik: </label>
                <input type="text" name="author" id="author" class="file-input" value="<?= htmlspecialchars($author); ?>">
                <button type="submit" name="submit" class="upload-button" id="upload-button">Update</button>
            </div>
        </form>
    </div>
</body>
</html>