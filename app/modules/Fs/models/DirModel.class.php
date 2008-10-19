<?php
require_once(dirname(__FILE__).'/../include/FsNode.class.php');
require_once(dirname(__FILE__).'/../include/FsDir.class.php');
require_once(dirname(__FILE__).'/../include/FsFile.class.php');

class Fs_DirModel extends ProjectBaseModel {
	private $dir=null;

	public function initialize($path) {
		$this->dir = new FsDir($path);
		$this->messages->sendDebug("init");
	}

	/**
	 * getListing
	 * Return an array of the contents of $path, or null if $path is not a directory
	 */
	public function getListing() {
		if( is_null( $this->dir ) ) return;
		return $this->dir->getContents();
	}

	public function getDirListing() {
		if( is_null( $this->dir ) ) return;
		return $this->dir->getDirs();
	}

	public function getFileListing() {
		if( is_null( $this->dir ) ) return;
		return $this->dir->getFiles();
	}
}

?>