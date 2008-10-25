<?php
require_once('NodeModel.class.php');
class Fs_DirModel extends Fs_NodeModel {
	private $dirs=array();
	private $files=array();
	private $loaded=false;

	/**
	 * load
	 * Loads the contents into this directory.
	 * @return void
	 */
	public function load() {
		if( $this->loaded || $this->loadError) return;

		$path = $this->getPath();
		try {
			if( !file_exists( $path ) ) throw new Exception("'$path' does not exist."); 
			$listing = scandir( $path );
			foreach( $listing as $name ) {
				$item = "$path/$name";
				if( is_dir( $item ) ) $this->dirs[$name] = $this->context->getModel('Dir', 'Fs', array($name, $this) ); //new Fs_DirModel($name, $this);
				elseif( is_file( $item ) ) $this->files[$name] = $this->context->getModel('File', 'Fs', array($name, $this) );
			}
			$this->loaded=true;
		} catch (Exception $e) {
			$this->loaded=false;
			$this->loadError=true;
			throw $e;
		}
		return $this->loaded;
	}

	/**
	 * update
	 * 
	 * Writes any new files or directories in this object to the FS.
	 */
	public function update() {
		return false;
	}

	/**
	 * create
	 *
	 * Creates this node.
	 */
	public function create() {
		return false;
	}

	/**
	 * delete
	 *
	 * Deletes this node.
	 */
	public function delete() {
		return false;
	}


/**********************************************************************/

	/**
	 *
	 */
	public function getContents() {
		$this->load();
		return array_merge( $this->getDirs(), $this->getFiles() );
	}

	public function getContentsList() {
		$ret = array();
		foreach( $this->getContentsList() as $item ) {
			$ret[] = $item->__string();
		}
		return $ret;
	}

	/**
	 *
	 */
	public function getDirs() {
		$this->load();
		return $this->dirs;
	}

	public function getDirList() {

	}

	/**
	 *
	 */
	public function getDir($name, $create=false) {

	}

	/**
	 *
	 */
	public function getFiles() {
		$this->load();
		return $this->files;
	}

	public function getFileList() {

	}

	/**
	 *
	 */
	public function getFile($name, $create=false) {

	}
}

?>