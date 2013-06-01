<?php
require_once '/Lib/Controller.php';
class Help extends  Controller {
	function __construct()
	{
		parent::__construct();
		$this->view->msg = 'This page is the help page';
		$this->view->render('help');
	}
	function venue($id = 0)
	{
		echo '<br/>Details of Id'. $id;
	}
}