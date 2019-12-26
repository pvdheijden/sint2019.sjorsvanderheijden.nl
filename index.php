<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
    case '/homepage.php':
        require 'homepage.php';
        break;
    case '/aardrijkskunde.php':
        require 'aardrijkskunde.php';
        break;
    case '/natuurkunde.php':
        require 'natuurkunde.php';
        break;
    case '/scheikunde.php':
        require 'scheikunde.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
