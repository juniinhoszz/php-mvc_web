<?php 

spl_autoload_register(function ($nome_classe){
    $classe_controller = 'Controller/' . $nome_classe . '.php';
    $classe_DAO = 'DAO/' . $nome_classe . '.php';
    $classe_Model = 'Model/' . $nome_classe . '.php';

    if(file_exists($classe_controller)){
        include $classe_controller;
    }else if(file_exists($classe_DAO)){
        include $classe_DAO;
    }else if(file_exists($classe_Model)){
        include $classe_Model;
    }

});