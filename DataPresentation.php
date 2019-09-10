<?php
require_once("DataCollection.php");

class DataPresentation {
    public $title = "Workshop 1 - Code Metrics";
    private $body;
    private $dataCollection;

    public function __construct($input) {
        $this->dataCollection = new DataCollection($input);
    }

    public function getBody() {
        return "<h1>Code Metrics</h1>
        <form action=\"index.php\" method=\"post\">
        <textarea rows=\"10\" cols=\"100\" type=\"text\" name=\"input\"></textarea>
        <input type=\"submit\">
        </form>
        {$this->dataCollection->getData()}";
    }

}