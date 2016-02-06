<?php
namespace icaro\modules\services\models;

use icaro\mvc\icaroModel;

/**
* 
*/
class services extends icaroModel
{
	private $modelImplements;

	public function __construct()
	{
		$implements = get_class($this) . $this->systemOperational();
		$this->modelImplements = new $implements;
	}

	public function show()
	{
		return $this->modelImplements->show();
	}

	public function stop($service)
	{
		return $this->modelImplements->stop($service);
	}
}