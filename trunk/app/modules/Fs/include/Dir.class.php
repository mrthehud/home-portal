<?php
class FsDir extends FsNode {
	private $dirs=array;
	private $files=array;
	
	/**
	 * load
	 * Loads the contents into this directory.
	 */
	public function load() {
		$path = $this->getPath();
		$listing = scandir( $path );
		foreach( $listing as $name ) {
			$item = "$path/$name";
			echo $item;
			if( is_dir( $item ) ) $this->dirs[] = new Dir($name, $this);
			elseif( is_file( $item ) ) $this->files[] = new File($name, $this);
		}
	}
}


