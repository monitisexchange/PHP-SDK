<?php
class LoadAverageMonitor extends InternalMonitor
{
	public function LoadAverageMonitor() { }

	protected function getAction($action)
	{
		switch ($action) {
		case 5:
			return "agentLoadAvg";
		case 6:
			return "loadAvgInfo";
		case 7:
			return "loadAvgResult";
		default:
			return "Action is not supported";
		}
	}
	/******************************
	Function to add LoadAverage Monitors;
	function name addLoadAverageMonitor
	$agentkey* key of the agent to add monitor for	
	$name* name of the monitor	
	$tag* tag of the test
	$limit1* max limit for first check
	$limit5* max limit for check after 5 minutes
	$limit15* max limit for check after 15 minutes
	******************************/
	public function addLoadAverageMonitor($agentkey, $name, $tag, $limit1, $limit5, $limit15)
	{
		$params["agentkey"] = $agentkey;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["limit1"] = $limit1;
		$params["limit5"] = $limit5;
		$params["limit15"] = $limit15;
		
		$resp = parent::makePostRequest("addLoadAverageMonitor", $params);
		return $resp;
	}
	/******************************
	Function to add LoadAverage Monitors;
	function name addLoadAverageMonitor
	$testId* id of the test to edit
	$name* name of the monitor	
	$tag* tag of the test
	$limit1* max limit for first check
	$limit5* max limit for check after 5 minutes
	$limit15* max limit for check after 15 minutes
	******************************/
	public function editLoadAverageMonitor($testId, $name, $tag, $limit1, $limit5, $limit15)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["limit1"] = $limit1;
		$params["limit5"] = $limit5;
		$params["limit15"] = $limit15;
		
		$resp = parent::makePostRequest("editLoadAverageMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Drive Monitors;
	function name getDriveMonitors
	$agentId* id of the agent to get drive monitors for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getLoadAverageMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentLoadAvg", $params);
		return $resp;
	}
	/*********************
	Function to get Drive Monitor Info;
	function name getDriveMonitorsInfo
	$monitorId* drive monitor id to get information for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getLoadAverageMonitorsInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("loadAvgInfo", $params);
		return $resp;
	}
	/*********************
	Function to get Monitor LoadAverage Result;
	function name getDriveResult
	$monitorId* id of drive to get results for
	$day* day that results should be retrieved for
	$month* month that results should be retrieved for
	$year*	year that results should be retrieved for
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getLoadAverageResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("loadAvgResult", $params);
		return $resp;
	}
	/*********************
	Function to get Top Drive with first check;
	function name getTopLoad1	
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getTopLoad1($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topload1", $params);
		return $resp;
	}
	/*********************
	Function to get Top Drive with second check;
	function name getTopLoad5	
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getTopLoad5($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topload5", $params);
		return $resp;
	}
	/*********************
	Function to get Top Drive with last check;
	function name getTopLoad15	
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getTopLoad15($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("topload15", $params);
		return $resp;
	}
}
?>