<?php
/**
 * Php object to control cache pages.
 * No framework and easy script.
 * 
 * @author Fred (twitter: @web4u)
 * @license Free
 * @version 0.1
 */
class FuzenCacheControl {
	
	private $cachefile;
	
	/**
	 * @param numeric $timeCache
	 * @param String $pathFile
	 * Method construct.
	 */
	function __construct($timeCache, $pathFile) {
		$this->cachefile = $pathFile;
		$cachetime = $timeCache * 60; // minutes
		
		if (file_exists($this->cachefile) && (time() - $cachetime < filemtime($this->cachefile))) {
			include($this->cachefile);
			echo ("<!-- Cached ".date("jS F Y H:i", filemtime($this->cachefile))."-->");
			exit;
		}
		ob_start();
	}
	
	/**
	 * Destruct method.
	 */
	function endCache() {
		$fp = fopen($this->cachefile, "w");
		fwrite($fp, ob_get_contents());
		fclose($fp);
		ob_end_flush();
	}
	
}
?>