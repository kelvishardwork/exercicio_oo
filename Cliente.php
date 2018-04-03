<?php
/**
 * Created by PhpStorm.
 * User: Kelvis Borges
 * Date: 14/03/2018
 * Time: 16:07
 */

class Cliente implements ClienteInterface
{
    public $arrayCliente;
    private $id, $nome, $sobrenome, $cpf, $endereco, $tipoCliente, $classificacao;



    public function setarTodosCampos($id, $nome, $sobrenome, $cpf, $endereco,$classificacao)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setCpf($cpf);
        $this->setEndereco($endereco);
        $this->setClassificacao($classificacao);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getTipoCliente()
    {
        return $this->tipoCliente;
    }

    public function setTipoCliente($tipoCliente)
    {
        $this->tipoCliente = $tipoCliente;
    }

    public function getClassificacao()
    {
        return $this->classificacao;
    }

    public function setClassificacao($importancia)
    {
        $this->classificacao = $importancia;
    }


}




