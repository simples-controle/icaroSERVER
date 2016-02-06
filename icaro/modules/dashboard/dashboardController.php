<?php
namespace icaro\modules\dashboard;

use icaro\mvc\icaroController;
use icaro\modules\services\models\services;

class dashboardController extends icaroController
{
	function index()
	{	
		$services = new services;
		$listServices = $services->show();
		$this->render('index', array('listServices' => $listServices));
	}
}