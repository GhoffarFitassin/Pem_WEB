<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Terindeks</title>
</head>
<body>
        <table>
            <tr>
                <th>Index</th>
                <th>Nama Dosen</th>
            </tr>
            <?php
            $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            foreach ($Listdosen as $index => $dosen) {
                echo "<tr>";
                echo "<td>" . $index . "</td>";
                echo "<td>" . $dosen . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
</body>
</html>