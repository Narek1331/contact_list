<?php

require_once('config/Router.php');
require_once('config/Database.php');
require_once('app/controllers/ContactController.php');
define('contact_controller',new ContactController());
define('db',new Database());

 route('/', 'GET', function () {
     return contact_controller->index();
 });

 route('/create', 'POST', function () {
    return contact_controller->store();
 });

 route('/delete', 'POST', function () {
    return contact_controller->delete();
 });
 
 $action = $_SERVER['REQUEST_URI'];
 dispatch($action);


?>