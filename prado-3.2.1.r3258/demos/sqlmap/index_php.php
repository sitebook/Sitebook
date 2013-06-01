<?php

$basePath=dirname(__FILE__);
$frameworkPath='../../framework/prado.php';
$assetsPath=$basePath."/assets";
$runtimePath=$basePath."/protected/runtime";

if(!is_file($frameworkPath))
	die("Unable to find prado framework path $frameworkPath.");
if(!is_writable($assetsPath))
	die("Please make sure that the directory $assetsPath is writable by Web server process.");
if(!is_writable($runtimePath))
	die("Please make sure that the directory $runtimePath is writable by Web server process.");

require_once($frameworkPath);

$application=new TApplication;
$application->run('protected',false,TApplication::CONFIG_TYPE_PHP);