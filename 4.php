<?php

class Singleton{
    public $data;

    private function __construct(){
        $this->data = rand();
    }

    private static $instance = null;
    public static function getInstance() {
        if (is_null(self::$instance))
            self::$instance = new self;
        return self::$instance;
    }    

    private function __clone() {}
    private function __wakeup() {}
}

$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();

echo $s1->data;
echo '<br>';
echo $s2->data;
$a = 'здорово';
$string = "String $a string";
echo $string;

echo "новая строка \n новая строка";
echo "<br>";
$hello = "Hello!";
echo $hello[5];