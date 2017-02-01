<?php
require_once 'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', 'root');

$tab = ORM::for_table('mes_chaussettes')->find_many();
$mes_chaussettes=ORM::for_table('mes_chaussettes') ->WHERE('couleur','rouge')->find_many();
// affichage des id des couleur des mes_chaussettesrouges
foreach ($mes_chaussettes as $value) {

	echo $value->id.'<br>';

}
SELECT REPLACE('rouge', 'rouge', 'rose');
?>
