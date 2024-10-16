<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Aman</title>
</head>
<body>
    <form action="html_aman.php" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="input" id="nama">
        <br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    $input = isset($_POST['input']) ? $_POST['input'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Input yang aman: " . $input . "</p>";
    }

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email sesuai</p>";
        } else {
            echo "<p>Email tidak sesuai 'janedoe@example.com'</p>";
        }
    }
    ?>
</body>
</html>