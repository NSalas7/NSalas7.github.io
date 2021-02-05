<?php

$database = require "Core/boostrap.php";

$router = new Router();

require "routes.php";

require $router->direct();