<?php 
class CharCount extends Metric {

    private $chars;
    private $label = "Number of characters";

    public function __construct(string $source) {
        parent::__construct($this->label);
        $this->chars = strlen($source);
    }

    public function getChars() {
        return $this->chars;
    }
}