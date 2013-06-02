<?php
require_once '/Lib/DBWrapper.php';
require_once '/Lib/DASException.php';

class SiteModel 
{
	function __construct() 
	{
		$this->dbi = DBWrapper::getInstance();
		$this->table = 'site';
	}
	
	function addSite($arr)
	{
		try
		{
			$query = "INSERT INTO {$this->table} 
			(site_id, site_name, site_address, site_description, site_policies, longitude, latitude) VALUES ";
			$query .= "( '". $arr[0] ."', ";
			$query .= "'". $arr[1] ."', ";
			$query .= "'". $arr[2] ."', ";
			$query .= " '". $arr[3] ."', ";
			$query .= "'". $arr[4] ."', ";
			$query .= "'". $arr[5] ."', ";
			$query .= "'". $arr[6] ."'); ";
			$this->dbi->executeQuery($query);
			return $this->dbi->rowCount();
		}
		catch(DASException $ex)
		{
			echo $ex->getCustomError();
		}
	}
}