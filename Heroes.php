<?php


class Heroes
{
    private $name;
    private $state;

    public function __construct($name, $state)
    {
        $this->name = $name;
        $this->state = $state;
    }
    public function get_state(){
        return $this->state;
    }

    public function set_state($state){
        $this->state = $state;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($name){
        $this->name = $name;
    }
}
