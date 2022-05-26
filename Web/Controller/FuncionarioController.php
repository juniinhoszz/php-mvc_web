<?php

namespace Web\Controller;
use Web\Model\FuncionarioModel;
use Web\DAO\FuncionarioDAO;


class FuncionarioController 
{
    public static function index() 
    {

        $model = new FuncionarioModel();
        $model->getAllRows();

        
        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function form()
    {

        $model = new FuncionarioModel;

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/


            
        include 'View/modules/Funcionario/FormFuncionario.php';
    }

    public static function save() 
    {

        


        $funcionario = new FuncionarioModel();

        $funcionario->id = $_POST['id'];
        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->endereco = $_POST['endereco'];
        
        
        $funcionario->save(); 

        header("Location: /funcionario"); 
    }

    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {


        $model = new FuncionarioDAO();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /funcionario"); // redirecionando o usuário para outra rota.
    }

}