<?php

abstract class C_Base extends C_Controller
{
	protected $title;
	protected $content;
	
	protected function before()
	{
		$this->title = '';
		$this->content = '';
	}

	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);	
		$page = $this->Template('views/main.php', $vars);
		echo $page;
	}

	public function __call($name, $params){
		$this->title = '404';
		$this->content = $this->Template("views/404.php");
		header("HTTP/1.0 404 Not Found");
	}
}
