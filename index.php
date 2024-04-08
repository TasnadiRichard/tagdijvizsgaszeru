<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

    $KeresUgyfel = explode('/', $_SERVER['QUERY_STRING']);
    //var_dump($KeresUgyfel)
    if($KeresUgyfel[0] === "ugyfel") {
        require_once 'ugyfel/index.php';
    } else {
        http_response_code(405);
        //-- hibaüzenetet küld JSON formátumban
        $errorJson = array("error_message" => 'Nincs ilyen API');
        return json_encode($errorJson);
    }