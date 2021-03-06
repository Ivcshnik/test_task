<?php

abstract class C_Controller
{
	protected abstract function render();

	protected abstract function before();

	public function Request($action)
	{
		$this->before();
		$this->$action();
		$this->render();
	}

	protected function IsGet()
	{
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}

	protected function IsPost()
	{
		return $_SERVER['REQUEST_METHOD'] == 'POST';
	}

	protected function Template($fileName, $vars = array())
	{
		foreach ($vars as $k => $v)
		{
			$$k = $v;
		}
		ob_start();
		include __DIR__."/../$fileName";
		return ob_get_clean();
	}
}
