<?php 
class Metric {

    private $label;

    public function __construct($label) {
        $this->label = $label;
    }

    public function toString ($label, $value) : string {
        
        return "<p>$label: $value</p>";
    }

    public function getLabel() {
        return $this->label;
    }
}