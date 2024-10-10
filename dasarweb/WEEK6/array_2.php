<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table {
            width: 50%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
            background-color: #e6f2ff;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #b3d9ff;
        }
        th {
            background-color: #1a8cff;
            color: white;
        }
        tr:last-child td {
            border-bottom: none;
        }
        tr:hover {
            background-color: #cce6ff;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        ?>
        <?php foreach ($Dosen as $attribute => $value) { ?>
            <tr>
                <td><?php echo ucfirst($attribute); ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php };?>
    </table>
</body>
</html>