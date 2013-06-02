<?php
require_once '/Lib/Controller.php';
class Index extends Controller {
	function __construct() 
	{
		parent::__construct();
		//$this->view->msg = '<br/>Index page';
		$this->view->render('Index');
		//echo 'This is the index controller';
	}

	function getDetails()
	{
		$this->view->msg = '<br/>Details page';
		$this->view->render('Details');
	}
}