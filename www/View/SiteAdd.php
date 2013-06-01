<?php
require_once '/Controller/SiteController.php';
echo $this->msg;

$arr = array('idabc','abc','120 ave. my space','this is my site','no policies','12.230','13.630');

$sitecontroller = new SiteController();

$sitecontroller->insertSite($arr);