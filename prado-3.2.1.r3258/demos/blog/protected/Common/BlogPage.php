<?php
/**
 * BlogPage class file
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 * @version $Id: BlogPage.php 3189 2012-07-12 12:16:21Z ctrlaltca $
 */

/**
 * BlogPage class
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.pradosoft.com/
 * @copyright Copyright &copy; 2006 PradoSoft
 * @license http://www.pradosoft.com/license/
 */
class BlogPage extends TPage
{
	public function onPreInit($param)
	{
		parent::onPreInit($param);
		$this->Theme=$this->Application->Parameters['ThemeName'];
	}

	public function getDataAccess()
	{
		return $this->getApplication()->getModule('data');
	}

	public function gotoDefaultPage()
	{
		$this->gotoPage($this->Service->DefaultPage);
	}

	public function gotoPage($pagePath,$getParameters=null)
	{
		$this->Response->redirect($this->Service->constructUrl($pagePath,$getParameters,false));
	}

	public function reportError($errorCode)
	{
		$this->gotoPage('ErrorReport',array('id'=>$errorCode));
	}
}

