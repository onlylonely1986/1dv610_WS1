<?php

require_once("Metric.php");
require_once("WordCount.php");
require_once("CharCount.php");

class DataCollection {
    
    private $dataCollection;

    public function __construct ($input) {
        $this->dataCollection = $this->createArray($input);
    }

    public function createArray($input) {
        return array(new WordCount($input), new CharCount($input));     
    }

    public function getData() {
        $data = "";
        foreach($this->dataCollection as $metric) {
            $data .= $metric->toString($metric->getLabel(), $metric->getValue());
        }
        return $data;
    }
}