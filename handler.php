<?php

//require_once __DIR__ . '/vendor/autoload.php';
ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/login':
        require 'login.php';
        break;
     case '/login.php':
        require 'login.php';
        break;
    case '/account':
        require 'account.php';
        break;
     case '/account.php':
        require 'account.php';
        break;
    case '/book_car.php':
        require 'book_car.php';
        break;
    case '/book_car':
        require 'book_car.php';
        break;
    case '/contact':
        require 'contact.php';
        break;
    case '/contact.php':
        require 'contact.php';
        break;
    case '/message_admin.php':
        require 'message_admin.php';
        break;
    case '/message_admin':
        require 'message_admin.php';
        break;
    case '/pay.php':
        require 'pay.php';
        break;
    case '/pay':
        require 'pay.php';
        break;
    case '/signup':
        require 'signup.php';
        break;
    case '/signup.php':
        require 'signup.php';
        break;  
    case '/status.php':
        require 'status.php';
        break;
    case '/status':
        require 'status.php';
        break;  
    case '/success':
        require 'success.php';
        break;
    case '/success.php':
        require 'success.php';
        break;
    case '/wait':
        require 'wait.php';
        break;
    case '/wait.php':
        require 'wait.php';
        break;

//admiiiiiiiiiiiiiiiiin

    case '/add_cars':
        require 'admin/add_cars.php';
        break;
    case '/add_cars.php':
        require 'admin/add_cars.php';
        break;
    case '/add_vehicles':
        require 'admin/add_vehicles.php';
        break;
    case '/add_vehicles.php':
        require 'admin/add_vehicles.php';
        break;
    case '/approve':
        require 'admin/approve.php';
        break;
    case '/approve.php':
        require 'admin/approve.php';
        break;
    case '/client_requests':
        require 'admin/client_requests.php';
        break;
    case '/client_requests.php':
        require 'admin/client_requests.php';
        break;
    case '/delete_car':
        require 'admin/delete_car.php';
        break;
    case '/delete_car.php':
        require 'admin/delete_car.php';
        break;
    case '/delete_msg':
        require 'admin/delete_msg.php';
        break;
    case '/delete_msg.php':
        require 'admin/delete_msg.php';
        break;
    case '/delete':
            require 'admin/delete.php';
            break;
    case '/delete.php':
            require 'admin/delete.php';
            break;
    case '/logout':
            require 'admin/logout.php';
            break;
    case '/logout.php':
            require 'admin/logout.php';
            break;
     case '/menu':
            require 'admin/menu.php';
            break;
    case '/menu.php':
            require 'admin/menu.php';
            break;

   /* case '/clases/Usuario.php':
            require __DIR__.'/clases/Usuario.php';
            break; */
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}


?>