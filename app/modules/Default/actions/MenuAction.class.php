<?php

class Default_MenuAction extends ProjectBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$menu = array();
		$menu['index'] = '/';
		$menu['Foo'] = '/foo';
		$menu['Bah'] = '/bah';
		$menu['Booo'] = '/poo';
		return 'Success';
	}

	/**
	 * This method returns the View name in case the Action doesn't serve the
	 * current Request method.
	 *
	 * !!!!!!!!!! DO NOT PUT ANY LOGIC INTO THIS METHOD !!!!!!!!!!
	 *
	 * @return     mixed - A string containing the view name associated with this
	 *                     action, or...
	 *                   - An array with two indices:
	 *                     0. The parent module of the view that will be executed.
	 *                     1. The view that will be executed.
	 *
	 */
	public function getDefaultViewName()
	{
		return 'Success';
	}

	public function isSimple() { return true; }
	public function isSlot() { return true; }
}

?>