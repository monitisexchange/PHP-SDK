<?php
/****************************
Abstruct Class for monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
abstract class BaseMonitor extends RequestSender
{
	/*********************
	constructor Function to initialise the apiUrl 
	function name BaseMonitor
	$apiUrl apiurl from where we will send our request to get the result
	*********************/
	public function BaseMonitor($apiUrl = "")
	{
		if($apiUrl != "")
			$this->API_URL = $apiUrl;
	}
	/*********************
	Function to get Monitors information;
	function name getMonitorInfo
	$monitorId monitor ID for that information to be reterieved
	$output result to be reterieved in format xml or Json
	*********************/
	public function getMonitorInfo($monitorId, $output = "")
	{
		$params[$this->getMonitorIdString()] = $monitorId;
		$params["output"] = $output;
		$resp = parent::makeGetRequest("getMonitorInfo", $params);
		return $resp;
	}
	/*********************
	Function to get MOnitors;
	function name getMonitors
	$output result to be reterieved in format xml or Json
	*********************/
	public function getMonitors($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest("getMonitors", $params);
		return $resp;
	}
	/*********************
	Function to get MOnitor with condition ;
	function name getMonitorResults
	$monitorIds monitor ids to be searched
	$year year for that results should be retrieved
	$month month for that results should be retrieved
	$day day for that results should be retrieved
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$locationIds location for monitors to be retrieved
	*********************/
	public function getMonitorResults($monitorId, $year, $month, $day, $timezone = "", $output = "", $locationIds = NULL)
	{
		$params[$this->getMonitorIdString()] = $monitorId;
		$params["year"] = $year;
		$params["month"] = $month;
		$params["day"] = $day;
		if ($timezone != "")
			$params["timezone"] = $timezone;
		
		if ($output == "xml")
			$params["output"] = $output;
		else
			$params["output"] = "";
		if ($locationIds != NULL)
		  $params["locationIds"] = implode(",", $locationIds);
		
		$resp = parent::makeGetRequest("getMonitorResults", $params);
		return $resp;
	}
	/*********************
	Function to suspend any monitor ;
	function name suspendMonitors
	$monitorIds monitor ids to be activated
	$tag tag of monitor
	*********************/
	public function suspendMonitors($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("suspendMonitors", $params);
		return $resp;
	}
	/*********************
	Function to activate monitors ;
	function name activateMonitors
	$monitorIds monitor ids to be activated
	$tag tag of monitor
	*********************/
	public function activateMonitors($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("activateMonitors", $params);
		return $resp;
	}
	/*********************
	Function to return parameter name ;
	function name getMonitorIdString
	*********************/
	protected function getMonitorIdString()
	{
		return "monitorId";
	}
	
	protected function getAction($action)
	{
		return $action;
	}
	
	/*********************
	Function to Urlencode the data without : and ;
	function name myUrlEncode
	$string to get url encodes
	*********************/
	protected function myUrlEncode($string)
	{
    	$entities = array('%3B', '%3A');
    	$replacements = array(";", ":");
    	return str_replace($entities, $replacements, urlencode($string));
	}
}
?>