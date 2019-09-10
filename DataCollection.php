<?php

require_once("Metric.php");
require_once("WordCount.php");
require_once("CharCount.php");

class DataCollection {

    private $wordCount;
    private $charCount;
    private $data;

    public function __construct ($input) {
        $this->wordCount = new WordCount($input);
        $this->charCount = new CharCount($input);
        $this->data = "{$this->wordCount->toString($this->wordCount->getLabel(), $this->wordCount->getWords())}{$this->charCount->toString($this->charCount->getLabel(), $this->charCount->getChars())}";
    }

    public function getData() {
        return $this->data;
    }
}