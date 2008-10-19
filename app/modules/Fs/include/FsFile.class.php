<?php
class FsFile extends FsNode {
	/**
	 * load
	 * Loads the file
	 * @return void
	 */
	public function load() {
		return false;
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
}

