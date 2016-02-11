<?php
namespace icaro\modules\services;

use icaro\mvc\icaroController;
use icaro\modules\services\models\services;
use icaro\modules\services\models\proccess;

class proccessController extends icaroController
{
	function show()
	{	
		$proccess = new proccess;
		$this->render('show', array(
							'proccess' => $proccess->show(),
							'cpuUsage' => $proccess->cpuUsage(),
							'memTotal' => $proccess->memTotal(),
							'memFree' => $proccess->memFree()
							)
					);
	}

	

}