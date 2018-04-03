<?php
/**
 * Created by PhpStorm.
 * User: Kelvis Borges
 * Date: 03/04/2018
 * Time: 18:19
 */

class ClienteFisico extends Cliente
{
    public function __construct()
    {
        $this->setTipoCliente(get_class($this));
    }
}