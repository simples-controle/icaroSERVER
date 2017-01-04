<?php
namespace icaro\modules\system\models;

use icaro\mvc\icaroModel;

/**
* 
*/
class system extends icaroModel
{
	private $modelImplements;

	public function __construct()
	{
		$implements = get_class($this) . $this->systemOperational();
		$this->modelImplements = new $implements;
	}

	public function hostname()
	{
		return $this->modelImplements->hostname();
	}

	public function kernelRelease()
	{
		return $this->modelImplements->kernelRelease();
	}

	public function kernelVersion()
	{
		return $this->modelImplements->kernelVersion();
	}

	public function operatingSystem()
	{
		return $this->modelImplements->operatingSystem();
	}

	public function hardwarePlataform()
	{
		return $this->modelImplements->hardwarePlataform();
	}


	public function cpuName()
	{
		return $this->modelImplements->cpuName();
	}	

	public function motherboardName()
	{
		return $this->modelImplements->motherboardName();
	}

	public function manufacturerName()
	{
		return $this->modelImplements->manufacturerName();
	}	

	

}