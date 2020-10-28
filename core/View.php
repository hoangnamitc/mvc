<?php
namespace app\core;

use eftec\bladeone\BladeOne;

class View extends BladeOne
{
	protected $template_path;
	protected $compile_path;
	protected $mode;

	public function __construct()
	{
		parent::__construct(
			dirname(__DIR__)."/views",
			dirname(__DIR__)."/storage/compile"
		);
	}

	public function renderView($view)
	{
		echo $this->run($view);
	}
}
