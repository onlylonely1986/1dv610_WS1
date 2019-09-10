<?php 
class WordCount {

    // private $source;
    private $wordCount;

    public function __construct(string $source) {
        $this->wordCount = str_word_count($source);
    }

    public function toString () : string {
        
        return "<p>Number of words: {$this->wordCount}</p>";
    }
}