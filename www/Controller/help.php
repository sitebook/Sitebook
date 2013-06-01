<?php
require_once '/Lib/Controller.php';
class Help extends  Controller {
	function __construct()
	{
		parent::__construct();
		echo 'inside help';
	}
	function venue($id = 0)
	{
		echo '<br/>Details of Id'. $id;
	}
}