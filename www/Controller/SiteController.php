<?php
require_once '/Model/SiteModel.php';
require_once '/Lib/Controller.php';

class SiteController extends Controller
{
	function __construct() 
	{
		parent::__construct();
		$this->model = new SiteModel();
	}	
	
	function AddSite()
	{
		$this->view->msg = '<br/>Create Site<br/>';
		$this->view->render('SiteAdd');
	}
	
	public function insertSite($arr)
	{
		$count = $this->model->addsite($arr);
		if ($count > 0)
		{
			$this->view->msg = 'Site '.$arr[1].' is added.';
			$this->view->render('SiteSuccess');
		}
		else
		{
			$this->view->msg = 'Site '.$arr[1].' is not added. Something bad happened.<br/>';
			$this->view->render('Error');
		}
	}
}