<?php
function chargerClasse($nom) 
{
	include_once $nom.'.class.php'; // inclut les classes dans la page ou il est appel�
}
spl_autoload_register('chargerClasse') // Enregistre la fonction en __autoload()
?>