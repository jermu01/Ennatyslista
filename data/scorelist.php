<?php
$xml = simplexml_load_file('scores.xml');

echo '<h1>Scorelist</h2>';
foreach($xml->scores as $scores){
        echo $scores->name . '(' . $scores->score . ')<br>';
}
    