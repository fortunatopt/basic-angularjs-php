<?php

$data = array(
    array( 'animal' => 'Cat',       'fur' => 'long' ),
    array( 'animal' => 'Dog',       'fur' => 'short' ),
    array( 'animal' => 'Hamster',   'fur' => 'short' ),
    array( 'animal' => 'Rat',       'fur' => 'short' )
);

echo(json_encode($data));

?>