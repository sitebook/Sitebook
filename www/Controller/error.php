<?php
require_once '/Lib/Controller.php';

class Error extends Controller {
	function __construct()
	{
		parent::__construct();
		$this->view->msg = 'This page doesnt exist';
		$this->view->render('error');
	}
}