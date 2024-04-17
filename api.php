<?php 

$discs = file_get_contents('dischi.json', true);

header('Content-type: application/json');

echo $discs;