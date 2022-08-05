<?php
class Animal {
    public $cry = 'bowbow!';
    function bow() {
        echo $this->cry . PHP_EOL; 
    }
}


class dog extends Animal {
    public $cry = 'ワンワン';
    function bow() {
        echo $this->cry . PHP_EOL;
    }
}

$Animal_1 = new dog();
$Animal_1->bow();

class cat extends Animal {
    public $cry = 'ニャーニャー';
    function bow() {
        echo $this->cry . PHP_EOL;
    }
}

$Animal_2 = new cat();
$Animal_2->bow();
?>