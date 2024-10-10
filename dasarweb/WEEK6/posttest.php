<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $().ready(function () {
            $("#flip").click(function () {
                $("#kotak").slideToggle("slow");
            });
        });
    </script>
    <style>
        #kotak, #flip{
            margin: auto;
            padding: 5px;
            text-align: center;
            justify-content: center;
            background-color: #a7dbd8;
            border: solid 2px #e0e4cc;
            border-radius: 5px;
        }
        table {
            width: 90%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 25px auto;
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
            background-color: #80a7a5;
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
    <h2> Data Siswa </h2>
    <div id="flip">Klik untuk Efek Slide</div>
    <?php
        $siswa = array(
            array("Budi", 15, "10A", "Malang"),
            array("Santoso", 17, "10B", "Malang"),
            array("Wicaksono", 19, "10A", "Malang"),
            array("Sumanto", 21, "15A", "Malang")
        );
    ?>
    <div id="kotak" style="display: none;">
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
    <?php foreach ($siswa as $attribute) {?>
        <tr>
            <td><?= $attribute[0];?></td>
            <td><?= $attribute[1];?></td>
            <td><?= $attribute[2];?></td>
            <td><?= $attribute[3];?></td>
        </tr>
    <?php };?>
    <?php 
    $total_umur = 0;
    $jumlah_siswa = 0;
    foreach ($siswa as $umur){
        $total_umur += $umur[1];
        $jumlah_siswa ++;
    }
    $rata_rata_umur = $total_umur / $jumlah_siswa;
    ?>
    </table>
        <h3>Rata-rata Umur Siswa: <?= $rata_rata_umur;?> tahun</h3>
    </div>
</body>
</html>