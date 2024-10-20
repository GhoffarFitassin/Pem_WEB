<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Dynamic Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2>Dynamic Form</h2>
        <div class="add-row">
            <label for="">Tambah Row</label>
            <input type="number" name="" id="row-count" min="1">
            <button type="button" onclick="addRows()">Tambah</button>
        </div>
        <div class="form">
            <form id="dynamic-form" action="" method="post">
                <table id="dynamic-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Komik Favorit</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="name[]" id="" required></td>
                        <td><input type="text" name="comic[]" id="" required></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <input type="submit" value="Submit">
        </form>
        </div>
        <div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['name']) && !empty($_POST['comic'])) {
                    echo "<h3>Hasil Input:</h3>";
                    echo "<ul>"; 
                    $names = $_POST['name'];
                    $comics = $_POST['comic'];

                    for ($i = 0; $i < count($names); $i++) { 
                        echo "<li>" . htmlspecialchars($names[$i]) . " - " . htmlspecialchars($comics[$i]) . "</li>"; 
                    }
                    echo "</ul>"; 
                }
            }
        ?>
        </div>
    </div>


    <!-- Tampil Data -->
    
</body>
</html>
