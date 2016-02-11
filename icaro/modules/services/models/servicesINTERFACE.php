<?php

namespace icaro\modules\services\models;

/**
* 
*/
interface servicesINTERFACE 
{
	public function show();

	public function start($serviceName);
	public function stop($serviceName);
	public function restart($serviceName);
}