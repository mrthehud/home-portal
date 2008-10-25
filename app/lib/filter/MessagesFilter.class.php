<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Agavi package.                                   |
// | Copyright (c) 2005-2008 the Agavi Project.                                |
// | Based on the Mojavi3 MVC Framework, Copyright (c) 2003-2005 Sean Kerr.    |
// |                                                                           |
// | For the full copyright and license information, please view the LICENSE   |
// | file that was distributed with this source code. You can also view the    |
// | LICENSE file online at http://www.agavi.org/LICENSE.txt                   |
// |   vi: set noexpandtab:                                                    |
// |   Local Variables:                                                        |
// |   indent-tabs-mode: t                                                     |
// |   End:                                                                    |
// +---------------------------------------------------------------------------+

/**
 * MessagesFilter inserts any messages into the page.
 */
class MessagesFilter extends AgaviFilter implements AgaviIGlobalFilter, AgaviIActionFilter
{
	/**
	 * Execute this filter.
	 *
	 * @param      AgaviFilterChain        The filter chain.
	 * @param      AgaviExecutionContainer The current execution container.
	 *
	 * @throws     <b>AgaviFilterException</b> If an error occurs during execution.
	 *
	 */
	public function execute(AgaviFilterChain $filterChain, AgaviExecutionContainer $container)
	{
		$context = $this->getContext();
		
		$comment = $this->getParameter('comment', false);
		$replace = $this->getParameter('replace', false);
		

		$filterChain->execute($container);
		
		$response = $container->getResponse();
		
		$outputTypes = (array) $this->getParameter('output_types');
		if(!$response->isContentMutable() || (is_array($outputTypes) && !in_array($response->getOutputType()->getName(), $outputTypes))) {
			return;
		}
	
		$response->appendContent(sprintf($comment, $time));
	}

	/**
	 * Initialize this filter.
	 *
	 * @param      AgaviContext The current application context.
	 * @param      array        An associative array of initialization parameters.
	 *
	 * @throws     <b>AgaviFilterException</b> If an error occurs during 
	 *                                         initialization.
	 *
	 * @author     Sean Kerr <skerr@mojavi.org>
	 * @author     David Zülke <dz@bitxtender.com>
	 * @since      0.9.0
	 */
	public function initialize(AgaviContext $context, array $parameters = array())
	{
		// set defaults
		$this->setParameter('comment', true);
		$this->setParameter('replace', null);
		$this->setParameter('output_types', null);

		// initialize parent
		parent::initialize($context, $parameters);
	}
}

?>