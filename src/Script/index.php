<?php
/** Get input fields **/
$rows = readline('Please enter number of rows: ');

if (is_numeric($rows) == false) {
    throw new Exception('Number of rows needs to be a number');
}

$columns = readline('Please enter number of columns: ');
if (is_numeric($columns) == false) {
    throw new Exception('Number of columns needs to be a number');
}

$mine = readline('Please enter "mine" for a mine or a number from 1-8: ');
if ($mine !== 'mine' && is_numeric($mine) == false) {
    throw new Exception('Input needs to include "mine"');
}

if (is_numeric($mine) && (int)$mine < 1 || (int)$mine > 8) {
    throw new Exception('Input needs to be between 1-8');
}

/** Generate grid **/

for ($i=0; $i<=$columns; $i++) {
    echo "column ";
}

for ($i=0; $i<=$rows; $i++) {
    echo "\n";
    echo "row\n";
}

/** Set out logic to determine whether placed location is a mine or how far we are to a mine **/
