<?php

require '../Core/Router.php';

$router = new Router();

require "routes.php";

$uri = trim($_SERVER["REQUEST_URI"], '/');


require $router->direct($uri);
