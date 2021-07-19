
<?php 

$lista = [
    'nome' => 'vinicio',
    'idade' => 90,
    'atributo' => [
        'ca' => 60,
        'agil' => 80,
        'dex' => 50
    ],
    'vida' => 1000,
    'mano' => 200
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORCA: ".$lista['atributo']['ca']."<br/>";
echo "VIDA: ".$lista['vida']."<br/>";

?>