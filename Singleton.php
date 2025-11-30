<?php

class GameSettings {
    
    private static $instance = null;
    
  
    public $volume = 50;
    public $difficulty = 'Normal';

    
    private function __construct() {}


    public static function getInstance(): self {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}


$settings1 = GameSettings::getInstance();  
$settings2 = GameSettings::getInstance();

echo ($settings1 === $settings2 ? 'True' : 'False') . "\n";

$settings1->volume = 70;
$settings1->difficulty = 'Hard';

echo $settings2->volume . "\n";      
echo $settings2->difficulty . "\n"; 



?>