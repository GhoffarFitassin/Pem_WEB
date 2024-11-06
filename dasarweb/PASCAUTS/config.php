<?php
function connectToDatabase($servername, $dbname) {
    $connectionOptions = array(
        "Database" => $dbname,
    );

    $conn = sqlsrv_connect($servername, $connectionOptions);
    if (!$conn) {
        die("Connection failed: " . print_r(sqlsrv_errors(), true));
    }
    return $conn;
}

connectToDatabase("LAPTOP-CEEMFUHE", "WebCihuy");
?>