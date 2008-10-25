<?php

class Default_StyleSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);

		// set the title
		$this->setAttribute('_title', 'Style Action');
		$this->getResponse()->setContent('');
	}
}

?>