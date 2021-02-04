<?php
include "Controladors/index.php";
$router = new router();

require "routes.php";

require $router->direct("alumnes");
?>


