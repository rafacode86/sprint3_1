<?php
    class Tigger {
        private static $instance = null;
        private static $counter = 0;
        private function __construct() {
            echo "Building character..." . PHP_EOL;
        }
        
        public static function getInstance() {
            if(self::$instance == null) {
                self::$instance = new Tigger();
            }
            return self::$instance;
        }
        public function roar() {
            echo "Grrr!" . PHP_EOL;
            self::$counter++;
        }
        public function getCounter() {
            echo self::$counter;
        }
    }

    
?>