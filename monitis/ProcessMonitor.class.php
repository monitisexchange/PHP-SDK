<?php
/****************************
Class to do actions realated to process of monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class ProcessMonitor extends InternalMonitor
{
  public function ProcessMonitor() { }

	protected function getProcessAction($action)
	{
		switch ($action) {
		case 5:
			return "agentProcesses";
		case 6:
			return "processInfo";
		case 7:
			return "processResult";
		default:
			return "Action is not supported";
		}
	}
	/******************************
	Function to add Process Monitors;
	function name addProcessMonitor
	$agentkey* key of the agent to add monitor for	
	$name* name of the monitor	
	$tag* tag of the test
	$processName* name of the process
	$cpuLimit* limit for CPU usage(%)
	$memoryLimit* limit for memory usage(MB)
	$virtualMemoryLimit* limit for virtual memory usage(MB)
	******************************/
	public function addProcessMonitor($agentkey, $name, $tag, $processName, $cpuLimit, $memoryLimit, $virtualMemoryLimit)
	{
		$params["agentkey"] = $agentkey;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["processName"] = urlencode($processName);
		$params["cpuLimit"] = $cpuLimit;
		$params["memoryLimit"] = $memoryLimit;
		$params["virtualMemoryLimit"] = $virtualMemoryLimit;
		$resp = parent::makePostRequest("addProcessMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Process ;
	function name editProcessMonitor
	$testId* id of the test to edit
	$cpuLimit* limit for CPU usage(%)
	$name* name of the monitor
	$memoryLimit* limit for memory usage(MB)
	$virtualMemoryLimit* limit for virtual memory usage(MB)
	$tag* tag of the test
	******************************/
	public function editProcessMonitor($testId, $name, $tag, $cpuLimit, $memoryLimit, $virtualMemoryLimit)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["cpuLimit"] = $cpuLimit;
		$params["memoryLimit"] = $memoryLimit;
		$params["virtualMemoryLimit"] = $virtualMemoryLimit;
		
		$resp = parent::makePostRequest("editProcessMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Drive Monitors;
	function name getDriveMonitors
	$agentId* id of the agent to get drive monitors for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getProcessMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentProcesses", $params);
		return $resp;
	}
	/*********************
	Function to get Drive Monitor Info;
	function name getDriveMonitorsInfo
	$monitorId* drive monitor id to get information for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getProcessMonitorsInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("processInfo", $params);
		return $resp;
	}
	/*********************
	Function to get Drive Result;
	function name getDriveResult
	$monitorId* id of drive to get results for
	$day* day that results should be retrieved for
	$month* month that results should be retrieved for
	$year*	year that results should be retrieved for
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getProcessResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("processResult", $params);
		return $resp;
	}
}
?>