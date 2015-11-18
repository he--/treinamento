<?php
/**
 * Created by PhpStorm.
 * User: helio
 * Date: 18/11/15
 * Time: 18:37
 */

namespace Observer;

use SplQueue;

class Promocao
{
    private $listaClientes;

    public function __construct()
    {
        $this->listaClientes = new SplQueue();
    }

    public function setClientes()
    {

    }


}