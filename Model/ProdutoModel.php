<?php

namespace Web\Model;
use \Web\DAO\ProdutoDAO;

class ProdutoModel
{
    public $id, $nome, $descricao, $preco;
    public $rows;


    public function save()
    {

        $dao = new ProdutoDAO();

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.
        if(empty($this->id)) 
        {
            // No que estamos enviado o proprio objeto model para o insert, por isso do this
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {

        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
    }


     /**
     * Método que encapsula o acesso ao método selectById da camada DAO
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * a ser recuperado do MySQL, via camada DAO.
     */
    public function getById(int $id)
    {


        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO

        // Para saber mais operador ternário, leia: https://pt.stackoverflow.com/questions/56812/uso-de-e-em-php
        return ($obj) ? $obj : new ProdutoModel(); // Operador Ternário

    }


    public function delete(int $id)
    {
        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}