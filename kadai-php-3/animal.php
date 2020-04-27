<?php

class Animal {
    public $name;
    public $age;
    
    // public function __construct($name, $age) {
    //     $this->name = $name;
    //     $this->age  = $age;
    // }
    
    function say() {
        print $this->name . "です。" . $this->age . "歳です。" . PHP_EOL;
    }
}

// $tanaka  = new Animal("田中太郎", 25);
// $tanaka->say();
?>
