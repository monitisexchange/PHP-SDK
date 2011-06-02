<?php
/****************************
Class to do actions realated to events of monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class CloudInstance extends RequestSender
{
	/*********************
	constructor Function 
	function name ExternalMonitor
	*********************/
	public function CloudInstance() { }
	/*********************
	Function to get Instances
	function name getInstances
	$timezoneoffset offset relative to GMT, used to show results in the timezone of the user
	$output result to be reterieved in format xml or Json
	*********************/
	public function getInstances($output = "", $timezoneoffset = NULL)
	{
		$params["output"] = $output;
		if ($timezoneoffset != NULL) $params["timezoneoffset"] = $timezoneoffset;
		$resp = parent::makeGetRequest("cloudInstances", $params);
		return $resp;
	}
	/*********************
	Function to get Instances Info
	function name getCloudInstanceInfo
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$type type of the cloud instance. Possible values are "ec2", "rackspace", "gogrid".
	$instanceId id of the cloud instance in Monitis.
	$output result to be reterieved in format xml or Json
	*********************/
	public function getCloudInstanceInfo($timezone = "", $type, $instanceId, $output = "")
	{
		$params["output"] = $output;
		if ($timezone != "") $params["timezone"] = $timezone;
		$params["type"] = $type;
		$params["instanceId"] = $instanceId;
		$resp = parent::makeGetRequest("cloudInstanceInfo", $params);
		return $resp;
	}
}
?>