<?php

namespace Observer;

use SplObserver;


    /**
     * Observer,that who recieves news
     */
class Cliente implements SplObserver
{
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param \SplSubject $itemVenda
     */
    public function update(\SplSubject $itemVenda)
    {
        echo $this->name.' Esta vendo o item '.$itemVenda->getContent().'</b><br>';
    }

}