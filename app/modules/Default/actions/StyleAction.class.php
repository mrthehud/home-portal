<?php

class Default_StyleAction extends ProjectBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$uid = $ro->getParameter('user');
		die($uid);		
		return 'Success';
	}
	public function getDefaultViewName()
	{
		return 'Success';
	}
}

?>