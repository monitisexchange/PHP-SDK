<?php
class MemoryMonitor extends InternalMonitor
{
	public function MemoryMonitor() { }

	/******************************
	Function to add Drive Monitors;
	function name addDriveMonitor
	$agentkey*	key of the agent to add monitor for
	$tag* tag of the monitor
	$name* name of the monitor
	$freeLimit* (for platforms: WINDOWS, LINUX, OPENSOLARIS) free memory limit in MB(for higher values test will fail)
	$freeSwapLimit*(for platforms: WINDOWS, LINUX, OPENSOLARIS)	 free swap limit in MB (for higher values test will fail)
	$freeVirtualLimit*(only for WINDOWS platform) free virtual memory limit in MB (for higher values test will fail)
	$bufferedLimit*(only for LINUX platform) buffered limit in MB (for higher values test will fail)
	$cachedLimit*(only for LINUX platform)	 cached memory limit in MB (for higher values test will fail)
	$platform* possible values are LINUX, WINDOWS, OPENSOLARIS, MAC, FREEBSD
	******************************/
	public function addMemoryMonitor($agentkey, $name, $tag, $platform, $freeLimit, $freeVirtualLimit, $freeSwapLimit, $bufferedLimit, $cachedLimit)
	{
		$params["agentkey"] = $agentkey;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["platform"] = $platform;
		if ($platform == "WINDOWS") {
			$params["freeLimit"] = $freeLimit;
			$params["freeVirtualLimit"] = $freeVirtualLimit;
			$params["freeSwapLimit"] = $freeSwapLimit;
		} else if ($platform == "LINUX") {
			$params["freeLimit"] = $freeLimit;
			$params["freeSwapLimit"] = $freeSwapLimit;
			$params["bufferedLimit"] = $bufferedLimit;
			$params["cachedLimit"] = $cachedLimit;
		} else if ($platform == "OPENSOLARIS") {
		  	$params["freeLimit"] = $freeLimit;
		  	$params["freeSwapLimit"] = $freeSwapLimit;
		}
		
		$resp = parent::makePostRequest("addMemoryMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Drive Monitors;
	function name editMemoryMonitor
	$testId*	if of monitor to edot to
	$tag* tag of the monitor
	$name* name of the monitor
	$freeLimit* (for platforms: WINDOWS, LINUX, OPENSOLARIS) free memory limit in MB(for higher values test will fail)
	$freeSwapLimit*(for platforms: WINDOWS, LINUX, OPENSOLARIS)	 free swap limit in MB (for higher values test will fail)
	$freeVirtualLimit*(only for WINDOWS platform) free virtual memory limit in MB (for higher values test will fail)
	$bufferedLimit*(only for LINUX platform) buffered limit in MB (for higher values test will fail)
	$cachedLimit*(only for LINUX platform)	 cached memory limit in MB (for higher values test will fail)
	$platform* possible values are LINUX, WINDOWS, OPENSOLARIS, MAC, FREEBSD
	******************************/
	public function editMemoryMonitor($testId, $name, $tag, $platform, $freeLimit, $freeVirtualLimit, $freeSwapLimit, $bufferedLimit, $cachedLimit)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["platform"] = $platform;
		if ($platform == "WINDOWS") {
			$params["freeLimit"] = $freeLimit;
			$params["freeVirtualLimit"] = $freeVirtualLimit;
			$params["freeSwapLimit"] = $freeSwapLimit;
		} else if ($platform == "LINUX") {
			$params["freeLimit"] = $freeLimit;
			$params["freeSwapLimit"] = $freeSwapLimit;
			$params["bufferedLimit"] = $bufferedLimit;
			$params["cachedLimit"] = $cachedLimit;
		} else if ($platform == "OPENSOLARIS") {
		  	$params["freeLimit"] = $freeLimit;
		  	$params["freeSwapLimit"] = $freeSwapLimit;
		}
		
		$resp = parent::makePostRequest("editMemoryMonitor", $params);
		return $resp;
	}
	
	/*********************
	Function to get Monitors agentMemory;
	function name agentMemory
	$agentId* id of the agent
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getMemoryMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentMemory", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Http Monitor Info;
	function name getInternalHttpMonitorsInfo
	$monitorId* id of the test to get results for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getMemoryInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("memoryInfo", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Http Result;
	function name getInternalHttpResult
	$monitorId* id of the test to get results for
	$day* day that results should be retrieved for
	$month* month that results should be retrieved for
	$year*	year that results should be retrieved for
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getMemoryResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("memoryResult", $params);
		return $resp;
	}
	/*********************
	Function to get Top Memory;
	function name getMemoryTops
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getMemoryTops($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topmemory", $params);
		return $resp;
	}
}
?>