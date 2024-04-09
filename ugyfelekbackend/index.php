<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'ugyfelekbackend/getugyfel.php';
        break;
    case 'DELETE':
        require_once 'ugyfelekbackend/deleteugyfel.php';
        break;
    case 'POST':
        require_once 'ugyfelekbackend/postugyfel.php';
        break;
    case 'PUT':
        require_once 'ugyfelekbackend/putugyfel.php';
        break;

    default:
        break;
}