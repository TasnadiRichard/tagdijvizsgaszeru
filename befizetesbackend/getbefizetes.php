<?php
$sql = '';
if (count($keresSzoveg) > 1) {
    if (is_int(intval($keresSzoveg[1]))) {
        $sql = 'SELECT * FROM befiz WHERE azon=' . $keresSzoveg[1];
    } else {
        http_response_code(404);
        echo 'Nem létező befizetés';
    }
} else {
    $sql = 'SELECT * FROM befiz WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $befizetések = array();
    while ($row = $result->fetch_assoc()) {
        $befizetések[] = $row;
    }
    http_response_code(200);
    echo json_encode($befizetések);
} else {
    http_response_code(404);
    echo 'Nincs egy ügyfél sem';
}