<?php

class Default_StyleSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$this->getResponse()->setContent("<style type='text/css'>".$this->getAttribute('css')."</style>");
	}

	public function executeCss(AgaviRequestDataHolder $rd) {
		$this->getResponse()->setContent( $this->getAttribute('css') );
	}
}

?>