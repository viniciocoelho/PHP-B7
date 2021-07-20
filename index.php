<?php 

$ingredientes = [
    'acucar',
    'ovo',
    'trigo',
    'fermento'
];

echo '<h2>Ingredientes</h2>';

echo "<ul>";
foreach($ingredientes as $ingredientes) {
    echo '<li>'.$ingredientes.'</li>';
};
echo "</ul>";


?>