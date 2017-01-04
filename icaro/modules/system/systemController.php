<?php
namespace icaro\modules\system;

use icaro\mvc\icaroController;
use icaro\modules\system\models\system;


class systemController extends icaroController
{
	function show()
	{	
		$system = new system;
		
		$this->render('show', array(
				'model' => $system
			));
	}
}