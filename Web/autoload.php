<?php 

spl_autoload_register(function ($nome_classe){

    //echo "Tentou dar include de: " . $nome_classe . "<br />";
    //echo "<hr />";

    //echo dirname(__FILE__) . "<br />";
    //  C:\Dev\php-mvc_web/Web\Controller\ProdutoController


    include dirname(__FILE__, 2) . '/' . $nome_classe .'.php';
    


    /*$classe_controller = 'Controller/' . $nome_classe . '.php';
    $classe_DAO = 'DAO/' . $nome_classe . '.php';
    $classe_Model = 'Model/' . $nome_classe . '.php';

    if(file_exists($classe_controller)){
        include $classe_controller;
    }else if(file_exists($classe_DAO)){
        include $classe_DAO;
    }else if(file_exists($classe_Model)){
        include $classe_Model;
    }*/

});