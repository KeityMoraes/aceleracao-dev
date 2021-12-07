<?php

require "model/UsuarioModel.php";

class HomeController{

  public function index(){
    $model = new UsuarioModel();
    $usuario = $model->UsuarioPerfil();
    $idade = $usuario["Idade"];
    $nome = $usuario["Nome"];
    include "view/viewUser.php";
  }
}