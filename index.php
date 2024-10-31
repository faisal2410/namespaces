<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\UserController;
use App\Models\User;


$controller = new UserController();
echo $controller->getUser();

$model = new User();
echo $model->getUserDetails();