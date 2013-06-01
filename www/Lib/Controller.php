<?php
class Controller {
	function __construct() 
	{
		//echo 'This is the base controller<br/>';
		$this->view = new View();
	}
}