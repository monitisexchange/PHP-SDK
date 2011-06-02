<?php
/****************************
Class to do actions realated to cpu monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class CPUMonitor extends InternalMonitor
{
	public function CPUMonitor() { }
	
	/******************************
	Function to add Internal CPU Monitors;
	function name addCPUMonitor
	$agentkey key of the agent to add monitor for
	$idleMin*(only for Linux agents) min allowed value for idle
	$ioWaitMax*(only for Linux agents) max value for iowait
	$kernelMax*	max value for kernel
	$niceMax*(only for Linux agents) max allowed value for nice
	$usedMax* max used value
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function addCPUMonitor($agentkey, $name, $tag, $usedMax, $kernelMax, $niceMax = "", $idleMin, $ioWaitMax)
	{
		$params["agentkey"] = $agentkey;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode(tag);
		$params["usedMax"] = $usedMax;
		$params["kernelMax"] = $kernelMax;
		if ($niceMax != "") {
			$params["niceMax"] = $niceMax;
			$params["idleMin"] = $idleMin;
			$params["ioWaitMax"] = $ioWaitMax;
		}
	
		$resp = parent::makePostRequest("addCPUMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Internal CPU Monitors;
	function name editCPUMonitor
	$testId id of monitor
	$idleMin*(only for Linux agents) min allowed value for idle
	$ioWaitMax*(only for Linux agents) max value for iowait
	$kernelMax*	max value for kernel
	$niceMax*(only for Linux agents) max allowed value for nice
	$usedMax* max used value
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function editCPUMonitor($testId, $name, $tag, $usedMax, $kernelMax, $niceMax, $idleMin, $ioWaitMax)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode(tag);
		$params["usedMax"] = $usedMax;
		$params["kernelMax"] = $kernelMax;
		$params["niceMax"] = $niceMax;
		$params["idleMin"] = $idleMin;
		$params["ioWaitMax"] = $ioWaitMax;
		
		$resp = parent::makePostRequest("editCPUMonitor", $params);
		return $resp;
	}
	
	/*********************
	Function to get Monitors agentCPU;
	function name agentCPU
	$agentId* id of the agent
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getCPUMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentCPU", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Http Monitor Info;
	function name getInternalHttpMonitorsInfo
	$monitorId* id of the test to get results for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getCPUInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("CPUInfo", $params);
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
	public function getCPUResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "") $params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("cpuResult", $params);
		return $resp;
	}
	public function getCPUTops($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topcpu", $params);
		return $resp;
	}
}
?>