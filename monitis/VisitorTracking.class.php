<?php
/****************************
Class to get Visitors to site posted with monitor
Author:  Sandeep Bhola
Monitis Api
****************************/
class VisitorTracking extends BaseMonitor
{
	/*********************
	constructor Function 
	function name ExternalMonitor
	*********************/
	public function VisitorTracking() { }

	protected function getActionVisitorTracking($action)
	{
		switch ($action) {
			case 5:
				return "visitorTrackingTests";
			case 6:
				return "visitorTrackingInfo";
			case 7:
				return "visitorTrackingResults";
			default:
				return "Action is not supported";
		}
	}
	/*********************
	Function to get VisitorTrackers;
	function name getVisitorTrackers
	$output result to be reterieved in format xml or Json
	*********************/
	public function getVisitorTrackers($output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest($this->getActionVisitorTracking(5), $params);
		return $resp;
	}	
	/*********************
	Function to get VisitorTrackers;
	function name getVisitorTrackers
	$output result to be reterieved in format xml or Json
	*********************/
	public function getVisitorTrackerInfo($siteId, $output = "")
	{
		$params["output"] = $output;
		$resp = parent::makeGetRequest($this->getActionVisitorTracking(5), $params);
		return $resp;
	}
	/*********************
	Function to get MOnitor with condition ;
	function name getMonitorResults
	$siteId site ids to be checked
	$year year for that results should be retrieved
	$month month for that results should be retrieved
	$day day for that results should be retrieved
	$timezoneoffset offset relative to GMT, used to show results in the timezone of the user
	*********************/
	public function getMonitorVisitorTrackerResults($siteId, $year, $month, $day, $timezoneoffset = "", $output = "")
	{
		$params[$this->getMonitorIdString()] = $siteId;
		$params["year"] = $year;
		$params["month"] = $month;
		$params["day"] = $day;
		if ($timezoneoffset != "")
			$params["timezoneoffset"] = $timezone;
		
		if ($output == "xml")
			$params["output"] = $output;
		else
			$params["output"] = "";
		
		$resp = parent::makeGetRequest($this->getActionVisitorTracking(7), $params);
		return $resp;
	}

	protected function getMonitorIdString() {
		return "siteId";
	}	
	protected function myUrlEncode($string)
	{
    	$entities = array('%3B', '%3A');
    	$replacements = array(";", ":");
    	return str_replace($entities, $replacements, urlencode($string));
	}
}
?>