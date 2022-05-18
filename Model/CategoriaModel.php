<?php

class CategoriaModel
{
    public $id, $descricao;
    public $rows;


    public function save()
    {
    include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.
        if($this->id == null) 
        {
            // No que estamos enviado o proprio objeto model para o insert, por isso do this
            $dao->insert($this);
        } else {
            // update
        }
    }

    public function getAllRows()
    {
        include 'DAO/CategoriaDAO.php';

        $dao = new CategoriaDAO();

        $this->rows = $dao->select();
    }
}