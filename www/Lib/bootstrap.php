<?php
require_once '/Controller/error.php';

class Bootstrap {
	function __construct()
	{
		if(isset($_GET['url']))
			$url = $_GET['url'];
		else
			$url = 'index/';
		
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		$file = 'Controller/' . $url[0] . '.php';
		
		if (file_exists($file))
		{
			require $file;
		}		
		else
		{
			$controller = new Error();
			return false;
		}

		$controller = new $url[0];
		$reflection = new ReflectionClass($url[0]);

		if (isset($url[2]) && $reflection->hasMethod($url[1]))
		{
			$controller->{$url[1]}($url[2]);
		}
		else
		{
			if (isset($url[1]) && $reflection->hasMethod($url[1]))
			{
				$controller->{$url[1]}();
			}
		}
	}
}