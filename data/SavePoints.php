<?php

// tallennus
function saveToDataXML($nimi, $pisteet){
    $xml = simplexml_load_file('data/scores.xml');

    $nimi = $_GET['nimi'];
    $pisteet = $_GET['pisteet'];

    $new_pic = addChild('nimi', $nimi)
    $new_pic = addChild('pisteet', $pisteet)
    
    // DOM tallenne & muotoilu
    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formaOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('data/scores.xml');
}