<?php
namespace icaro\modules\services;

use icaro\mvc\icaroController;
use icaro\modules\services\models\services;

class servicesController extends icaroController
{
	function show()
	{	
		$this->title = 'Show Services';
		
		$services = new services;
		$listServices = $services->show();
		$this->render('show', array('listServices' => $listServices));
	}

	function stop()
	{	
		$services = new services;
		$listServices = $services->stop( $_REQUEST['service'] );	
	}
}