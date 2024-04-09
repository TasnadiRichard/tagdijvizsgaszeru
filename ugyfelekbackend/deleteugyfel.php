<?php

$sql = '';
if (count($KeresUgyfel) > 1) {
    if (is_int(intval($KeresUgyfel[1]))) {
        $sql = 'DELETE FROM ugyfel WHERE azon='. $KeresUgyfel[1];
    }
} else {
    http_response_code(404);
    echo 'Nem létező ügyfél';
}
require_once './databaseconnect.php';

if ($result = $connection->query($sql)) {
    http_response_code(201);
    echo 'Sikeres Törlés';
} else {
    http_response_code(404);
    echo 'Sikeres Törlés';
}