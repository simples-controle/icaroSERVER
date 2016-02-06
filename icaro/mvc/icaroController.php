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
	
}