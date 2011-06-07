<?php
/****************************
Class to do actions realated to events of custom monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class CustomMonitor extends BaseMonitor
{
	public function CustomMonitor($apiUrl)
	{
		$this->API_URL = $apiUrl;
	}
	/*********************
	Function to add Monitor
	function name addMonitor
	$name name of the monitor... must be URL encoded.
	$tag tag of the test... must be URL encoded.
	$monitorParams parameters of the monitor in the following format:
		name1:displayName1:value1:dataType1:isHidden1[;name2:displayName2:value2:dataType2:isHidden2...]
	$resultParams result parameters in the following format:
		name1:displayName1:uom1:dataType1[;name2:displayName2:uom2:dataType2...]
		UOM is unit of measure(user defined string parameter, e.g. ms, s, kB, MB, GB, GHz, kbit/s, ... )
		dataType could be		1 for boolean		2 for integer		3 for string		4 for float
		isHidden set to to true if you don't want to show monitor parameter in Monitis dashbord, otherwise set it to false.
	*********************/
	public function addCustomMonitor($name, $tag, $resultParams, $monitorParams = "")
	{
		if ($monitorParams != "")
			$params["monitorParams"] = parent::myUrlEncode($monitorParams);

		$params["resultParams"] = parent::myUrlEncode($resultParams);
		$params["name"] = parent::myUrlEncode($name);
		$params["tag"] = parent::myUrlEncode($tag);
		$resp = parent::makePostRequest("addMonitor", $params);
		return $resp;
	}
	/*********************
	Function to edit Monitor
	function name editMonitor
	$monitorId monitor ID to edit
	$name name of the monitor... must be URL encoded.
	$tag tag of the test... must be URL encoded.
	$monitorParams parameters of the monitor in the following format:
		name1:displayName1:value1:dataType1:isHidden1[;name2:displayName2:value2:dataType2:isHidden2...]
	*********************/
	public function editCustomMonitor($monitorId, $name, $tag, $monitorParams = NULL)
	{
		if ($monitorParams != NULL)
			$params["monitorParams"] = parent::myUrlEncode($monitorParams);
		
		$params["name"] = parent::myUrlEncode($name);
		$params["monitorId"] = $monitorId;
		$params["tag"] = parent::myUrlEncode($tag);
		$resp = parent::makePostRequest("editMonitor", $params);
		return $resp;
	}
	/*********************
	Function to delete Monitor
	function name deleteMonitor
	$monitorId monitor ID to edit
	*********************/
	public function deleteCustomMonitor($monitorId)
	{
		$params["monitorId"] = $monitorId;
		$resp = parent::makePostRequest("deleteMonitor", $params);
		return $resp;
	}
	/*********************
	Function to add result Monitor
	function name addResult
	$monitorId monitor ID to edit
	$checktime time of check
	$results result(s) of the monitor in the following format:
			paramName1:paramValue1[;paramName2:paramValue2...]
	*********************/
	public function addCustomResult($monitorId, $checktime, $results)
	{
		$params["results"] = parent::myUrlEncode($results);
		$params["monitorId"] = $monitorId;
		$params["checktime"] = $checktime;
		$resp = parent::makePostRequest("addResult", $params);
		return $resp;
	}
	/*********************
	Function to add result Monitor
	function name getMonitors
	$tag tag to find
	$output out put type to get output of monitors lidt in Json or xml format
	*********************/
	public function getCustomMonitors($tag = "", $output = "")
	{
		if ($tag != "")
		  $params["tag"] = parent::myUrlEncode($tag);
		
		$params["output"] = $output;
		$resp = parent::makeGetRequest("getMonitors", $params);
		return $resp;
	}
	/*********************
	Function to add result Monitor
	function name getMonitorInfo
	$monitorId id of monitor to info to
	$tag tag to find
	$output out put type to get output of monitors lidt in Json or xml format
	*********************/
	public function getCustomMonitorInfo($monitorId, $excludeHidden, $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["output"] = $output;
		$params["excludeHidden"] = $excludeHidden;
		$resp = parent::makeGetRequest("getMonitorInfo", $params);
		return $resp;
	}
	/*********************
	Function to add result Monitor
	function name getMonitorInfo
	$monitorId id of monitor to info to
	$tag tag to find
	$output out put type to get output of monitors lidt in Json or xml format
	*********************/
	public function getCustomMonitorResults($monitorId, $year, $month, $day, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["year"] = $year;
		$params["month"] = $month;
		$params["day"] = $day;
		if ($timezone != "")
			$params["timezone"] = $timezone;
		
		if ($output == "xml")
			$params["output"] = $output;
		else
			$params["output"] = "";
		$resp = parent::makeGetRequest("getMonitorResults", $params);
		return $resp;
	}
}
?>