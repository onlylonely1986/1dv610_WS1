<?php
require_once("HTMLPageView.php");
require_once("DataCollection.php");

//use these variables to create your instance of the class!

$input = isset($_POST["input"]) ? trim($_POST["input"]) : "";

$title = "Workshop 1 - Code Metrics";
$dataCollection = new DataCollection($input);
$body = "<h1>Code Metrics</h1>

<form action=\"index.php\" method=\"post\">
    <textarea rows=\"10\" cols=\"100\" type=\"text\" name=\"input\"></textarea>
    <input type=\"submit\">
</form>
{$dataCollection->getData()}";

$view = new HTMLPageView($title, $body);

$view->echoHTML();

