<?php

$taskName = $_GET['task_name'];
$taskScore = $_GET['task_score'];
$scoreSpan = $_GET['scoreSpan'];


$xml = simplexml_load_file('scores.xml');

$newTask = $xml->addChild('scores');
$newTask->addChild('name', $taskName);
$newTask->addChild('score', $taskScore);
$newTask->addChild('scoreSpan', $scoreSpan);
$newTask->addAttribute('list', 'scorelist');


//tallennus
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formaOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('scores.xml');

header("Location: scorelist.php");

    