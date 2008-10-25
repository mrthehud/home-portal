<?php
abstract class Fs_NodeModel extends ProjectBaseModel {
	private $name=null;
	private $parent=null; // Null for top level.

	public function __construct($name, Fs_NodeModel $parent=null) {
		$this->name=$name;
		$this->parent = $parent;
	}

	/**
	 * getPath
	 * Returns the full path to this directory, via all parents..
	 * Omits the trailing slash.
	 */
	public function getPath() {
		$path = is_null($this->parent) ? '' : $this->parent->getPath();
		$path .= '/'.$this->name;
		return $path;
	}

	public function __toString() {
		return $this->name;
	}

	/*	The Following methods return true if the operation completed successfully.
		False if the operation could not compete. */

	/**
	 * load
	 * Loads the node
	 * @return boolean succes.
	 */
	public abstract function load();

	/**
	 * create
	 *
	 * Creates this node.
	 */
	public abstract function create();

	/**
	 * delete
	 *
	 * Deletes this node.
	 */
	public abstract function delete();

}

?>