<?php
namespace app\core;

class Router
{
	public Request $request;
	public View $view;
	protected array $routers = [];

	public function __construct(\app\core\Request $request)
	{
		$this->request = $request;
		$this->view = new View();
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
			exit;
		}
		if (is_string($callback)) {
			return $this->view->renderView($callback);
		}
		echo call_user_func($callback);
	}
}
