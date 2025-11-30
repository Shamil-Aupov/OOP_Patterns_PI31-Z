<?php

class Engine {
    private $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}

class Transmission {
    private $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}

class Body {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}
