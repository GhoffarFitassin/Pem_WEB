<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Upload Music</h2>
        <form id="upload-form" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih File</label>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </div>
        </form>
        <div id="result" class="upload-status"></div>
    </div>
    <div id="result"></div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</html>