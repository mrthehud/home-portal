<?php

class Default_IndexAction extends ProjectBaseAction
{
	/**
	 * This Action does not yet serve any Request methods.
	 * When a request comes in and this Action is used, execution will be skipped
	 * and the View returned by getDefaultViewName() will be used.
	 *
	 * If an Action has an execute() method, this means it serves all methods.
	 * Alternatively, you can implement executeRead() and executeWrite() methods,
	 * because "read" and "write" are the default names for Web Request methods.
	 * Other request methods may be explicitely served via execcuteReqmethname().
	 *
	 * Keep in mind that if an Action serves a Request method, validation will be
	 * performed prior to execution.
	 *
	 * Usually, for example for an AddProduct form, your Action should only be run
	 * when a POST request comes in, which is mapped to the "write" method by
	 * default. Therefor, you'd only implement executeWrite() and put the logic to
	 * add the new product to the database there, while for GET (o.e. "read")
	 * requests, execution would be skipped, and the View name would be determined
	 * using getDefaultViewName().
	 *
	 * We strongly recommend to prefer specific executeWhatever() methods over the
	 * "catchall" execute().
	 *
	 * Besides execute() and execute*(), there are other methods that might either
	 * be generic or specific to a request method. These are:
	 * registerValidators() and register*Validators()
	 * validate() and validate*()
	 * handleError() and handle*Error()
	 *
	 * The execution of these methods is not dependent on the respective specific
	 * execute*() being present, e.g. for a "write" Request, validateWrite() will
	 * be run even if there is no executeWrite() method.
	 */
	public function executeRead(AgaviRequestDataHolder $rd)
	{

		return 'Success';
	}

	public function executeWrite(AgaviRequestDataHolder $rd)
	{
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
}

?>