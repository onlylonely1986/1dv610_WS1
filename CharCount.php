<?php 
class CharCount {

    // private $source;
    private $charCount;

    public function __construct(string $source) {
        $this->charCount = strlen($source);
    }

    public function toString () : string {
        
        return "<p>Number of characters: {$this->charCount}</p>";
    }
}