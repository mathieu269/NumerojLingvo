<?php

if (!defined("PLX_ROOT")) {
	exit();
}


$plxAdmin->checkProfil(PROFIL_ADMIN);

$listeNombres = array(0, 1, 2, 3, 4, 5, 10, 11, 12, 20, 21, 22);


?>

<h2>
	<?php echo plxUtils::strCheck($plxPlugin->getLang("NOM_LANGUE"));?>
</h2>

<ul>
	<?php foreach ($listeNombres as $nombre) {?>
		
		<li>
			<?php
				$chaine = $plxPlugin->getLangNombre("ANNEE", $nombre);
			?>
			
			<?php echo plxUtils::strCheck(sprintf($chaine, $nombre));?>
		</li>
		
	<?php }?>
</ul>
