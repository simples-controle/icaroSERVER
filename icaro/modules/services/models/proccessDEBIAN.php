<?php 
namespace icaro\modules\services\models;

/*
* 
*/
class proccessDEBIAN implements proccessINTERFACE
{
	public function show()
	{
		$console = explode('||', shell_exec('sudo ps -eo "%C; %G; %P; %U; %a; %c; %g; %x ||" --no-headers'));
		
		$dataSet = array();
		foreach ($console as $key => $value) 
		{
			if ( trim( $value ) != '' )
			{
				$value = explode(';',  $value );
				
				$proccessMODEL = new proccessMODEL;
				$proccessMODEL->user = trim($value[3]);
				$proccessMODEL->pid = trim($value[2]);
				$proccessMODEL->cpuUsage = trim($value[0]);
				
				$proccessMODEL->command = trim($value[5]);
				
				$dataSet[] = $proccessMODEL;
			}	
		}
		var_dump($dataSet);
		return $dataSet;
	}

	public function cpuUsage()
	{
		$cpuUsage = shell_exec("sudo ps aux | awk {'sum+=$3;print sum'} | tail -n 1");
		if ($cpuUsage == ""){
			return 0;
		}
		return $cpuUsage;
	}

	public function memTotal()
	{
		$memTotal = shell_exec("grep MemTotal /proc/meminfo | awk '{print $2}'  ");
		if ($memTotal == ""){
			return 0;
		}
		return $memTotal;
	}

	public function memFree()
	{
		$memFree = shell_exec("grep MemFree /proc/meminfo | awk '{print $2}'  ");
		if ($memFree == ""){
			return 0;
		}
		return $memFree;
	}

}