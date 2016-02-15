<?php 
namespace icaro\modules\system\models;

/*
* 
*/
class systemDEBIAN implements systemINTERFACE
{
	
	public function hostname()
	{
		return shell_exec('sudo uname -n');
	}

	public function kernelRelease()
	{
		return shell_exec('sudo uname -ro');
	}

	public function kernelVersion()
	{
		return shell_exec('sudo uname -v');
	}

	public function operatingSystem()
	{
		return shell_exec('sudo uname -o');
	}

	public function hardwarePlataform()
	{
		return shell_exec('sudo uname -i');
	}

}