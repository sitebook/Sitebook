<?php
/**
 * ErrorReport class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: ErrorReport.php 3189 2012-07-12 12:16:21Z ctrlaltca $
 */

/**
 * ErrorReport class
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 */
class ErrorReport extends BlogPage
{
	public function onLoad($param)
	{
		parent::onLoad($param);
		$this->ErrorMessage->Text=$this->Application->SecurityManager->validateData(urldecode($this->Request['msg']));
	}
}

