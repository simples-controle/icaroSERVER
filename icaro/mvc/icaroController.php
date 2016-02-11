<?php
namespace icaro\mvc;
/**
* 
*/
class icaroController
{

	public $title = 'icaroSERVER';
	public $template = 'main';
	public $viewPath = '//views//';

	private $flash = array();

	public function render($view = '', $arrParam)
	{
		$view =  str_replace("\\", "/", $this->viewPath . '/' . $view.'.php');
		
		//--
		ob_start();
		extract($arrParam);
		require($view);
		$view = ob_get_contents();
		ob_end_clean();

		
		//--		
		ob_start();
		require( 'template/' . $this->template .'.php');
        $template = explode('{{[content]}}', ob_get_contents());
        ob_end_clean();

        //--
        echo $template[0];
		echo $view;
        echo $template[1];
	}

	public function redirect($url)
	{
		header( 'locate: ' . $url );
		exit;
	}

	public function setFlash($type, $msg)
	{
		$this->flash[] = array('type' => $type, 'msg' => $msg);
		
	}

	public function getFlash()
	{
		return $this->flash;
	}



	
}