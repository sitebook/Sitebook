<?php
/**
 * BlogErrorHandler class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: BlogErrorHandler.php 3189 2012-07-12 12:16:21Z ctrlaltca $
 */

Prado::using('System.Exceptions.TErrorHandler');
Prado::using('Application.Common.BlogException');

/**
 * BlogErrorHandler class
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 */
class BlogErrorHandler extends TErrorHandler
{
	/**
	 * Displays error to the client user.
	 * THttpException and errors happened when the application is in <b>Debug</b>
	 * mode will be displayed to the client user.
	 * @param integer response status code
	 * @param Exception exception instance
	 */
	protected function handleExternalError($statusCode,$exception)
	{
		if($exception instanceof BlogException)
		{
			$message=$exception->getMessage();
			Prado::log($message,TLogger::ERROR,'BlogApplication');
			$message=urldecode($this->getApplication()->getSecurityManager()->hashData($message));
			$this->Response->redirect($this->Service->constructUrl('ErrorReport',array('msg'=>$message),false));
		}
		else
			parent::handleExternalError($statusCode,$exception);
	}
}

