<?php
$directory = 'documents/';
$songs = array_diff(scandir($directory), array('..', '.'));

if (count($songs) > 0) {
    echo '<table>';
    echo '<thead><tr><th>No</th><th>Judul Lagu</th><th>Audio</th></tr></thead>';
    echo '<tbody>';
    $index = 1;
    foreach ($songs as $song) {
        $file_ext = pathinfo($song, PATHINFO_EXTENSION);
        if (in_array($file_ext, ['mp3', 'wav', 'ogg', 'flac'])) {
            echo '<tr>';
            echo '<td>' . $index . '</td>';
            echo '<td>' . htmlspecialchars($song) . '</td>';
            echo '<td>';
            echo '<audio id="audio' . $index . '" controls>';
            echo '<source src="' . $directory . $song . '" type="audio/' . $file_ext . '">';
            echo 'Browser Anda tidak mendukung tag audio.';
            echo '</audio>';
            echo '</td>';
            echo '</tr>';
            $index++;
        }
    }
    echo '</tbody></table>';
} else {
    echo 'Tidak ada lagu yang ditemukan.';
}
?>
