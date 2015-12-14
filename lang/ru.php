<?php

$LANG = array(
	
	"fonctionNombre" => function ($n) {
		
		if (	($n % 10 === 1)
			&&	($n % 100 !== 11)
		) {
			return "forme1";
		} elseif (
				($n % 10 >= 2)
			&&	($n % 10 <= 4)
			&&	(
					$n % 100 < 10
				||	$n % 100 >= 20
			)
		) {
			return "forme2";
		} else {
			return "forme3";
		}
		
	},
	
	"ANNEE__forme1" => "%s год",
	"ANNEE__forme2" => "%s года",
	"ANNEE__forme3" => "%s лет",
	
	"NOM_LANGUE" => "Russe",
	
);

