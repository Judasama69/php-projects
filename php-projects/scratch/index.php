<?php

$favcolor = $_GET['color'] ?? 'red';

echo match ($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
};

//this is a comment

