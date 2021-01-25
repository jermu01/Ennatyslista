<?php

$player = $_GET['player'];
$score = $_GET['score'];


$xml = simplexml_load_file('scores.xml');

$newScore = $xml->addChild('scores');
$newScore->addChild('name', $player);
$newScore->addChild('score', $score);
$newScore->addAttribute('list', 'scorelist');


//tallennus
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('scores.xml');

header("Location: scorelist.php");

    