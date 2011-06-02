<?php
/****************************
Class to do actions realated to ping monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class PingMonitor extends InternalMonitor
{
	public function PingMonitor() { }

	/******************************
	Function to add Ping Monitors;
	function name addPingMonitor
	$userAgentId *	 integer	 id of the agent to add monitor for
	$maxLost* max allowed count for lost packets
	$packetsCount* count of packets
	$packetsSize* size of the packet (byte)
	$timeout* test timeout in milliseconds
	$url* URL of the test
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function addPingMonitor($userAgentId, $maxLost, $packetsCount, $packetsSize, $timeout, $url, $name, $tag)
	{
		$params["userAgentId"] = $userAgentId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["url"] = $url;
		$params["timeout"] = $timeout;
		$params["packetsSize"] = $packetsSize;
		$params["packetsCount"] = $packetsCount;
		$params["maxLost"] = $maxLost;
		
		$resp = parent::makePostRequest("addInternalHttpMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Drive Monitors;
	function name editDriveMonitor
	$testId*	id of the agent to add monitor for
	$maxLost* max allowed count for lost packets
	$packetsCount* count of packets
	$packetsSize* size of the packet (byte)
	$timeout* test timeout in milliseconds
	$url* URL of the test
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function editPingMonitor($testId, $maxLost, $packetsCount, $packetsSize, $timeout, $url, $name, $tag)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["url"] = $url;
		$params["timeout"] = $timeout;
		$params["packetsSize"] = $packetsSize;
		$params["packetsCount"] = $packetsCount;
		$params["maxLost"] = $maxLost;
		
		$resp = parent::makePostRequest("editInternalPingMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Ping Monitors;
	function name getPingMonitors
	$agentId* id of the agent to get drive monitors for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getPingMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentPingTests", $params);
		return $resp;
	}
	/*********************
	Function to get Ping Monitor Info;
	function name getDriveMonitorsInfo
	$monitorId* drive monitor id to get information for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getPingMonitorsInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("internalPingInfo", $params);
		return $resp;
	}
	/*********************
	Function to get Ping Result;
	function name getPingResult
	$monitorId* id of drive to get results for
	$day* day that results should be retrieved for
	$month* month that results should be retrieved for
	$year*	year that results should be retrieved for
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getPingResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("internalPingResult", $params);
		return $resp;
	}
}
?>