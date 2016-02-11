<?php
namespace icaro\modules\services\models;

use icaro\mvc\icaroModel;

/**
* 
*/
class proccess extends icaroModel
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
	
	public function cpuUsage()
	{
		return $this->modelImplements->cpuUsage();
	}

	public function memTotal()
	{
		return $this->modelImplements->memTotal();
	}

	public function memFree()
	{
		return $this->modelImplements->memFree();
	}


}