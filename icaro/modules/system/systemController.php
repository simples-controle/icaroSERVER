<?php
namespace icaro\modules\system;

use icaro\mvc\icaroController;
use icaro\modules\system\models\system;


class systemController extends icaroController
{
	function index()
	{	
		$system = new system;
		
		//$this->render('index', array('listServices' => $listServices));
	}
}