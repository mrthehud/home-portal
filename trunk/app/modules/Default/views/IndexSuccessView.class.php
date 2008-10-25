<?php

class Default_IndexSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		// create a new template layer and a renderer by hand
		// reason: these actions should work even if the user changes his output type to use Smarty or whatever

		$this->setupHtml($rd);
	}
}

?>