<?php 
class CharCount extends Metric {

    private $label = "Number of characters";

    public function __construct(string $source) {
        parent::__construct($this->label, strlen($source));
    }

}