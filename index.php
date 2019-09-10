<?php
require_once("HTMLPageView.php");
require_once("DataPresentation.php");


$input = isset($_POST["input"]) ? trim($_POST["input"]) : "";

$dataPresentation = new DataPresentation($input);

$view = new HTMLPageView($dataPresentation->title, $dataPresentation->getBody());

$view->echoHTML();

