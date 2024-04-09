<?php
switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        require_once 'befizetesbackend/getbefizetes.php';
        break;
    case 'POST':
        require_once 'befizetesbackend/postbefizetes.php';
        break;    
}