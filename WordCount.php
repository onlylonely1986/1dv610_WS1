<?php 
class WordCount extends Metric {

    private $label = "Number of words";

    public function __construct(string $source) {
        parent::__construct($this->label, str_word_count($source));
    }
}