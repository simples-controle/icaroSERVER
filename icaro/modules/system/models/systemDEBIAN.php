<?php 
namespace icaro\modules\system\models;

/*
* 
*/
class systemDEBIAN implements systemINTERFACE
{
	
	public function hostname()
	{
		return shell_exec('hostname');
	}

	public function kernelRelease()
	{
		return shell_exec('uname -ro');
	}

	public function kernelVersion()
	{
		return shell_exec('uname -v');
	}

	public function operatingSystem()
	{
		return shell_exec('uname -o');
	}

	public function hardwarePlataform()
	{
		return shell_exec('uname -i');
	}


	public function cpuName()
	{
		return str_replace('model name', '', shell_exec('cat /proc/cpuinfo | grep "model name" | uniq'));
	}

	public function motherboardName()
	{
		return shell_exec("lspci | grep 'Host bridge' | sed 's/^.*: //'");
	}

	public function manufacturerName()
	{
		return shell_exec("dmidecode -s system-manufacturer");
	}



	 


}