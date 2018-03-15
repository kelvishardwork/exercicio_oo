<?php
/**
 * Created by PhpStorm.
 * User: Kelvis Borges
 * Date: 14/03/2018
 * Time: 16:07
 */

class Cliente
{
    public $arrayCliente;
    public $id, $nome, $sobrenome, $cpf, $endereco;

    public function setarTodosCampos($id, $nome, $sobrenome, $cpf, $endereco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }
}




