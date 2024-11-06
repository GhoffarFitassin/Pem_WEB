<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP - SQL Server</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <style>
    
    </style>
</head>
<body>
    <div class="upload-form-container">
        <h2>List Komik</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <label for="nama">Nama Komik: </label>
                <input type="text" name="nama" id="nama" class="file-input">
                <label for="genre">Genre Komik: </label>
                <input type="text" name="genre" id="genre" class="file-input">
                <label for="author">Author Komik: </label>
                <input type="text" name="author" id="author" class="file-input">
                <button type="submit" name="submit" class="upload-button" id="upload-button">Tambah</button>
            </div>
        </form>
        <div >
            <?php
                include "list_komik.php";            
            ?>
        </div>
    </div>
</body>
</html>