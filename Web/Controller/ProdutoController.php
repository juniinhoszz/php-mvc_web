<?php

namespace Web\Controller;
use Web\Model\ProdutoModel;
use Web\DAO\ProdutoDAO;

class ProdutoController 
{
    public static function index() 
    {


        $model = new ProdutoModel();
        $model->getAllRows();

        
        include 'View/modules/Produto/ProdutoListar.php';
    }

    public static function form()
    {



        $model = new ProdutoModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/


        include 'View/modules/Produto/ProdutoCadastro.php';

        
    }

    public static function save() 
    {



        

        $produto = new ProdutoModel();

        
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->descricao = $_POST['descricao'];
        $produto->preco = $_POST['preco'];
        
        $produto->save(); 

        header("Location: /produto"); 
    }

    public static function delete()
    {


        $model = new ProdutoDAO();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /produto");
    }

}