<?php
namespace app\core;

/**
 * Class Application
 */
class Application
{
	public Router $router;
	public Request $request;

	public function __construct()
	{
		$this->request = new Request();
		$this->router = new Router($this->request);
	}

	public function run()
	{
		// todo
		$this->router->resolve();
	}
}
