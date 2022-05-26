<?php

namespace Web\Controller;
use Web\Model\CategoriaModel;
use Web\DAO\CategoriaDAO;


class CategoriaController 
{
    public static function index() 
    {

        $model = new CategoriaModel();
        $model->getAllRows();

        
        include 'View/modules/Categoria/ListaCategoria.php';
    }

    public static function form()
    {

        $model = new CategoriaModel;

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/


            
        include 'View/modules/Categoria/FormCategoria.php';
    }

    public static function save() 
    {

         


        $categoria = new CategoriaModel();

        $categoria->id = $_POST['id'];
        $categoria->descricao = $_POST['descricao'];
        
        
        $categoria->save(); 

        header("Location: /categoria"); 
    }

    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {


        $model = new CategoriaDAO();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /categoria"); // redirecionando o usuário para outra rota.
    }

}