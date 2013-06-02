<?php
/**
 * Logout class file.
 *
 * @author Wei Zhuo <weizhuo[at]gmail[dot]com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2005-2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: Logout.php 3189 2012-07-12 12:16:21Z ctrlaltca $
 * @package Demos
 */

/**
 * Logout page class.
 *
 * @author Wei Zhuo <weizhuo[at]gmail[dot]com>
 * @version $Id: Logout.php 3189 2012-07-12 12:16:21Z ctrlaltca $
 * @package Demos
 * @since 3.1
 */
class Logout extends TPage
{
	/**
	 * Logs out the current user and redirect to default page.
	 */
	function onLoad($param)
	{
		$this->Application->getModule('auth')->logout();
		$url = $this->Service->constructUrl($this->Service->DefaultPage);
		$this->Response->redirect($url);		
	}
}

