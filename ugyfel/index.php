<?php

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'ugyfel/getugyfelek.php';
        break;
    case 'POST':
        require_once 'ugyfel/postugyfel.php';
        break;

    case 'PUT':
        require_once 'ugyfel/postugyfel.php';
        break;
    
    case 'DELETE':
        require_once 'ugyfel/postugyfel.php';
        break;
        
    default:
        break;
}