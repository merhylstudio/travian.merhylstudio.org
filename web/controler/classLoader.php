<?php
function loadClass($nom) 
{
	include_once $nom.'.class.php'; // Inclut les classes dans la page ou il est appel�
}
spl_autoload_register('loadClass') // Enregistre la fonction en __autoload()
?>