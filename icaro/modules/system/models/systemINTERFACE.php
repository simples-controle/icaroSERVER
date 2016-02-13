<?php

namespace icaro\modules\system\models;

/**
* 
*/
interface systemINTERFACE 
{
	
	public function kernelName();
	public function kernelRelease();
	public function kernelVersion();

	public function nodeName();

	public function proccessorType();
	
}