<?php


class NumerojLingvo extends plxPlugin {
	
	
	public function __construct($default_lang) {
		
		parent::__construct($default_lang);
		
		$this->setAdminProfil(PROFIL_ADMIN);
		$this->setAdminMenu($this->getInfo("title"));
		
	}
	
	
	// fonctionne à partir de PHP 5.3 uniquement
	
	public function getLangNombre($key, $n) {
		
		$key .= "__" . $this->aLang["fonctionNombre"]($n);
		
		return $this->getLang($key);
		
	}
	
}

