<?php

class Default_StyleAction extends ProjectBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$styles = $this->context->getModel('Styles');
		$uid = 1;//$this->getAttribute('user');
		$this->setAttribute( 'css', $styles->getUserStyles($uid) );
		return 'Success';
	}

	public function getDefaultViewName()
	{
		return 'Success';
	}
}

?>