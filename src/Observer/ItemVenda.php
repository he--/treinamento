<?php

namespace Observer;

use SplSubject;

class ItemVenda implements \SplSubject
{

    private $name;
    private $observers = array();
    private $content;
    private $preco;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    //add observer
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    //add observer
    public function attachAll(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    //remove observer
    public function detach(\SplObserver $observer) {

        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    /**
     * @param $content
     */
    public function promocaoPreco($content, $preco)
    {
        $this->content = $content;
        $this->setPreco($preco);
        $this->notify();
    }

    public function getContent()
    {
        return $this->content." ({$this->name})";
    }


    //notify observers(or some of them)
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getObservers()
    {
        return $this->observers;
    }

    /**
     * @param array $observers
     */
    public function setObservers($observers)
    {
        $this->observers = $observers;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }



}