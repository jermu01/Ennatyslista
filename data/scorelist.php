<?php
$xml = simplexml_load_file('scores.xml');

foreach($xml->scores as $scores){
    echo $scores->name . '(' . $scores->score . ')<br>';
}
    