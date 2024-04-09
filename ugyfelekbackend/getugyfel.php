<?php 

//-- osszes ugyfel adatai JSON-ban
$sql = '';
if (count($KeresUgyfel) > 1) {
    if (is_int(intval($KeresUgyfel[1]))) {
        $sql = 'SELECT * FROM ugyfel WHERE azon=' . $KeresUgyfel[1];
    } else {
        http_response_code(404);
        echo 'Nem létező ügyfél';
    }
} else {
    $sql = 'SELECT * FROM ugyfel WHERE 1';
}
require_once './databaseconnect.php';
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    $ugyfelekkarbantartasa = array();
    while ($row = $result->fetch_assoc()) {
        $ugyfelekkarbantartasa = $row;
    }
    http_response_code(200);
    echo json_encode($ugyfelekkarbantartasa);
} else {
    http_response_code(404);
    return json_encode(array("message" => 'Nincs egy ügyfél sem'));
}