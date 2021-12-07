<?php
require "controller/homeController.php";

$pagina = isset($_GET['pagina']) ? $_GET["pagina"]: "index";

$ctrl = new HomeController();

switch($pagina):

case "index":
  $ctrl->index();
  break;
case "Perfil":
  $ctrl->index();
  break;
endswitch;