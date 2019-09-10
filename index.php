<?php
require_once("HTMLPageView.php");
require_once("WordCount.php");
require_once("CharCount.php");

//use these variables to create your instance of the class!

$input = isset($_POST["input"]) ? trim($_POST["input"]) : "";

$title = "Workshop 1 - Code Metrics";
$wordCount = new WordCount($input);
$charCount = new CharCount($input);
$body = "<h1>Code Metrics</h1>

<form action=\"index.php\" method=\"post\">
    <textarea rows=\"10\" cols=\"100\" type=\"text\" name=\"input\"></textarea>
    <input type=\"submit\">
</form>
{$wordCount->toString()}{$charCount->toString()}";

$view = new HTMLPageView($title, $body); //A person is dependency injected into the HelloView

$view->echoHTML();

