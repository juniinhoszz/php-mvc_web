<?php

class CategoriaController 
{
    public static function index() 
    {
        include 'Model/CategoriaModel.php';

        $model = new CategoriaModel();
        $model->getAllRows();

        
        include 'View/modules/Categoria/ListaCategoria.php';
    }

    public static function form()
    {
        include 'View/modules/Categoria/FormCategoria.php';
    }

    public static function save() 
    {

        include 'Model/CategoriaModel.php'; 


        $categoria = new CategoriaModel();
        $categoria->descricao = $_POST['descricao'];
        
        
        $categoria->save(); 

        header("Location: /categoria"); 
    }
}