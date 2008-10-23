<?php

class Default_IndexSuccessView extends ProjectBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		// create a new template layer and a renderer by hand
		// reason: these actions should work even if the user changes his output type to use Smarty or whatever
		define('SMARTY_DIR', AgaviConfig::get('core.app_dir').'/lib/smarty/libs/');
		$renderer = new AgaviSmartyRenderer();
		$renderer->initialize($this->context, array());
		$this->setAttribute('base_href', $this->context->getRouting()->getBaseHref());
		$this->appendLayer($this->createLayer('AgaviFileTemplateLayer', 'content', $renderer));
	}
}

?>