<?php
/**
 * Created by PhpStorm.
 * User: Kelvis Borges
 * Date: 03/04/2018
 * Time: 18:25
 */

interface ClienteInterface
{
    public function getTipoCliente();

    public function getClassificacao();

    public function setClassificacao($importancia);

    public function setTipoCliente($tipoCliente);
}