<?php
namespace app\core;

class Router
{
	public Request $request;
	protected array $routers = [];

	public function __construct(\app\core\Request $request)
	{
		$this->request = $request;
	}

	public function get($path, $callback)
	{
		$this->routers['get'][$path] = $callback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routers[$method][$path] ?? false;
		if (false === $callback) {
			echo "404";
			exit(1);
		}
		echo call_user_func($callback);
	}
}
