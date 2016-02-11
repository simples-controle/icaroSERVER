<?php
namespace icaro\modules\services;

use icaro\mvc\icaroController;
use icaro\modules\services\models\services;

class servicesController extends icaroController
{
	function show()
	{	
		$services = new services;
		$listServices = $services->show();
		$this->render('show', array('listServices' => $listServices));
	}

	function stop()
	{	
		$services = new services;
		if ( ($stopService = $services->stop( $_REQUEST['service'] )) != "" ){
			$this->setFlash('success', 'Service '. $_REQUEST['service'] . ' ' . $stopService);
		}else{
			$this->setFlash('danger', 'Service '. $_REQUEST['service'] . ' dont stoped! Every services dont have stoped, eg: cron, resolveconf and outhers.');
		}
		$this->show();	
	}

	function start()
	{	
		$services = new services;
		if ( ($startService = $services->start( $_REQUEST['service'] )) != "" ){
			$this->setFlash('success', 'Service '. $_REQUEST['service'] . ' ' . $startService);
		}else{
			$this->setFlash('danger', 'Service '. $_REQUEST['service'] . ' dont started!');
		}
		$this->show();	
	}

	function restart()
	{	
		$services = new services;
		if ( ($restartService = $services->restart( $_REQUEST['service'] )) != "" ){
			$this->setFlash('success', 'Service '. $_REQUEST['service'] . ' ' . $restartService);
		}else{
			$this->setFlash('danger', 'Service '. $_REQUEST['service'] . ' dont restarted!');
		}
		$this->show();	
	}

}