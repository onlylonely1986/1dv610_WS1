<?php 
class Metric {

    private $label;
    private $value;

    public function __construct($label, $value) {
        $this->label = $label;
        $this->value = $value;
    }

    public function toString ($label, $value) : string {
        
        return "<p>$label: $value</p>";
    }

    public function getLabel() {
        return $this->label;
    }

    public function getValue () {
        return $this->value;
    }
}