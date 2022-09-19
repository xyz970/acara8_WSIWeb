<?php

class Person{
    var $name;
    public function __construct() {
        // $this->name = $new_name;
    }
    public function set_name($new_name)
    {
        $this->name = $new_name;
    }
    public function get_name()
    {
        return $this->name;
    }
}