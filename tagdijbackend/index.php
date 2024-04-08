<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'tagdijbackend/getugyfel.php';
        break;
    case 'DELETE':
        require_once 'tagdijbackend/deleteugyfel.php';
        break;
    case 'POST':
        require_once 'tagdijbackend/postugyfel.php';
        break;
    case 'PUT':
        require_once 'tagdijbackend/putugyfel.php';
        break;

    default:
        break;
}