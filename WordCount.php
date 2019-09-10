<?php 
class WordCount extends Metric {

    private $words;
    private $label = "Number of words";

    public function __construct(string $source) {
        parent::__construct($this->label);
        $this->words = str_word_count($source);
    }

    public function getWords () {
        return $this->words;
    }
}