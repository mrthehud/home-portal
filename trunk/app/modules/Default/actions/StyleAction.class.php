<?php

class Default_StyleAction extends ProjectBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
				
		return 'Success';
	}
	public function getDefaultViewName()
	{
		return 'Success';
	}
}

?>