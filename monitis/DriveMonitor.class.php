<?php
/****************************
Class to do actions realated to drivers of monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class DriveMonitor extends InternalMonitor
{
	public function DriveMonitor() { }

	protected function getDriveAction($action)
	{
		switch ($action) {
		case 5:
			return "agentDrives";
		case 6:
			return "driveInfo";
		case 7:
			return "driveResult";
		default:
			return "Action is not supported";
		}
	}
	/******************************
	Function to add Drive Monitors;
	function name addDriveMonitor
	$testId* id of the test to edit
	$freeLimit* free memory limit(GB)
	$name* name of the monitor
	$agentkey* key of the agent to add monitor for
	$driveLetter* name of the drive to monitor
	$tag* tag of the test
	******************************/
	public function addDriveMonitor($agentkey, $name, $tag, $driveLetter, $freeLimit)
	{
		$params["agentkey"] = $agentkey;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["driveLetter"] = $driveLetter;
		$params["freeLimit"] = $freeLimit;
		
		$resp = parent::makePostRequest("addDriveMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Drive Monitors;
	function name editDriveMonitor
	$testId* id of the test to edit
	$freeLimit* free memory limit(GB)
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function editDriveMonitor($testId, $name, $tag, $freeLimit)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["freeLimit"] = $freeLimit;
		
		$resp = parent::makePostRequest("editDriveMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Drive Monitors;
	function name getDriveMonitors
	$agentId* id of the agent to get drive monitors for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getDriveMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentDrives", $params);
		return $resp;
	}
	/*********************
	Function to get Drive Monitor Info;
	function name getDriveMonitorsInfo
	$monitorId* drive monitor id to get information for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getDriveMonitorsInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("driveInfo", $params);
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
	public function getDriveResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("driveResult", $params);
		return $resp;
	}
	/*********************
	Function to get Top Drive;
	function name getDriveTops
	$timezoneoffset offset relative to GMT, used to show results in the timezone of the user
	$limit max number of top results to get
	$tag tag to get top results for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getDriveTops($output = "", $tag = "", $limit = "", $timezoneoffset = "")
	{
		if($tag != "") $params["tag"] = $tag;
		if($limit != "") $params["limit"] = $limit;
		if($timezoneoffset != "") $params["timezoneoffset"] = $timezoneoffset;
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topdrive", $params);
		return $resp;
	}
}
?>