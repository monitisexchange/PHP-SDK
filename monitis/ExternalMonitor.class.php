<?php
/****************************
Class to do actions realated to Externol Monitors
Author:  Sandeep Bhola
Monitis Api
****************************/
class ExternalMonitor extends BaseMonitor
{
	/*********************
	constructor Function 
	function name ExternalMonitor
	*********************/
	public function ExternalMonitor() { }
	/*********************
	Function to add Monitor
	function name addMonitor
	$name* name of the monitor... must be URL encoded.
	$tag* tag of the test... must be URL encoded.
	$locationIds* comma separated ids of the locations to add
	$url* url of the monitor
	$type*: Supported types are: "http", "https", "ftp", "ping", "ssh", "dns", "mysql", "udp", "tcp", "sip", "smtp", "imap", "pop".
	$interval* check interval(min). Available values are 1, 3, 5, 10, 15, 20, 30, 40, 60
	$contentMatchString* text to match in the response
	$detailedTestType* Possible values are 1 for GET, 2 for POST, 3 for PUT, 4 for DELETE
	$contentMatchFlag* set to 1 if there is string to match in response text otherwise 0.
	$postData* the data sent during POST request, e.g m_U=asd&m_P=asd
	$testParams (only for DNS and MySQL)
		additional test parameters in the following format - key1:value1;key2:value2; . . . 
		for MySQL test 
		username - user name for authentication
		password - password for authentication
		port - MySQL port number
		timeout - MySQL timeout in seconds
		for DNS test
		server - the name server
		expip - expected IP
		expauth - if name server is authoritative should be "-A" otherwise an empty string
	$timeout* timeout in ms
	$overSSL if 1, requests will be sent via SSL. Can be set for FTP, UDP, TCP, SMTP, IMAP, POP test types. Default value is 0.
	*********************/
	public function addExternalMonitor($name, $tag, $locationIds, $url, $type, $interval, $contentMatchString, $detailedTestType, $contentMatchFlag, $postData, $testParams, $timeout, $overSSL = 0)
	{
		$params["name"] = parent::myurlEncode($name);
		$params["tag"] = parent::myurlEncode($tag);
		if(is_array($locationIds))
			$params["locationIds"] = implode(",", $locationIds);
		else
			$params["locationIds"] = $locationIds;
		$params["url"] = $url;
		$params["type"] = $type;
		$params["interval"] = $interval;
		$params["contentMatchString"] = parent::myurlEncode($contentMatchString);
		$params["contentMatchFlag"] = $contentMatchFlag;
		$params["postData"] = $postData;
		$params["params"] = parent::myurlEncode($testParams);
		$params["detailedTestType"] = $detailedTestType;
		$params["timeout"] = $timeout;
		$params["overSSL"] = $overSSL;
		
		$resp = parent::makePostRequest("addExternalMonitor", $params);
		return $resp;
	}
	/*********************
	Function to delete Monitor(s)
	function name deleteMonitors
	$testIds monitor ID to edit for multiple pass an array
	*********************/
	public function deleteExternalMonitors($testIds = array())
	{
		if(is_array($testIds))
			$params["testIds"] = implode(",", $testIds);
		else
			$params["testIds"] = $testIds;
		$resp = parent::makePostRequest("deleteExternalMonitor", $params);
		return $resp;
	}
	/*********************
	Function to edit Monitor
	function name editMonitor
	$testId monitor ID to edit to
	$name* name of the monitor... must be URL encoded.
	$tag* tag of the test... must be URL encoded.
	$locationIds* comma separated ids of the locations to add
	$url* url of the monitor
	$contentMatchString* text to match in the response
	$timeout* timeout in ms
	$maxValue max response time in ms
	*********************/
	public function editExternalMonitor($testId, $name, $tag, $locationIds, $url, $contentMatchString, $timeout, $maxValue)
	{
		$params["testId"] = $testId;
		$params["name"] = parent::myurlEncode($name);
		$params["tag"] = parent::myurlEncode($tag);
		if(is_array($locationIds))
			$params["locationIds"] = implode(",", $locationIds);
		else
			$params["locationIds"] = $locationIds;
		$params["url"] = $url;
		$params["contentMatchString"] = parent::myurlEncode($contentMatchString);
		$params["timeout"] = $timeout;
		$params["maxValue"] = $maxValue;
		
		$resp = parent::makePostRequest("editExternalMonitor", $params);
		return $resp;
	}
	/*********************
	Function to getAction for different value
	function name getAction
	$action action value to get action type
	*********************/
	protected function getActionEzternolMonitor($action)
	{
		switch ($action) {
			case 5:
				return "tests";
			case 6:
				return "testinfo";
			case 7:
				return "testresult";
			case 8:
				return "suspendExternalMonitor";
			case 9:
				return "activateExternalMonitor";
			default: 
				return "Action is not supported";
		}
	}
	/*********************
	Function to gett MonitorId
	function name getMonitorIdString
	*********************/
	protected function getMonitorIdString() {
		return "testId";
	}
	/*********************
	Function to gett tags
	function name getTags
	*********************/
	public function getExternalMonitor($output = "")
	{
		$params["output"] = $output;
		return parent::makeGetRequest("tests", $params);
	}
	/*********************
	Function to gett top result externols
	function name getTops
	*********************/
	public function getExternalTops($output = "")
	{
		$params["output"] = $output;
		return parent::makeGetRequest("topexternal", $params);
	}
	/*********************
	Function to gett top locations added
	function name getLocations
	*********************/
	public function getExternalLocations($output = "")
	{
		$params["output"] = $output;
		return parent::makeGetRequest("locations", $params);
	}
	/*********************
	Function to gett top Snapshot
	function name getSnapshot
	*********************/
	public function getExternalSnapshot($output = "", $locationIds = "")
	{
		$params["output"] = $output;
		if ($locationIds != "") {
			if(is_array($locationIds))
				$params["locationIds"] = implode(",", $locationIds);
			else
				$params["locationIds"] = $locationIds;
		}
		return parent::makeGetRequest("testsLastValues", $params);
	}
	/*********************
	Function to get Drive Monitor Info;
	function name getDriveMonitorsInfo
	$testId* test id to get information for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getExternolMonitorsInfo($testId , $output = "")
	{
		$params["testId"] = $testId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("testinfo", $params);
		return $resp;
	}
	/*********************
	Function to get Monitor LoadAverage Result;
	function name getDriveResult
	$testId* id of drive to get results for
	$day* day that results should be retrieved for
	$month* month that results should be retrieved for
	$year*	year that results should be retrieved for
	$locationIds commaseprated locations ids
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getExternolMonitorsResult($testId, $day, $month, $year, $locationIds = "", $timezone = "", $output = "")
	{
		$params["testId"] = $testId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($locationIds != "")$params["locationIds"] = $locationIds;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("testresult", $params);
		return $resp;
	}
	/*********************
	Function to gett tags
	function name getTags
	*********************/
	public function getExternalTags($output = "")
	{
		$params["output"] = $output;
		return parent::makeGetRequest("tags", $params);
	}
	/*********************
	Function to gett tags
	function name getTags
	$tag is the tag to search monitors using tag
	*********************/
	public function getExternalMonitorsByTags($tag = "", $output = "")
	{
		if($tag!="") $params["tag"] = $tag;
		$params["output"] = $output;
		return parent::makeGetRequest("tagtests", $params);
	}
	/*********************
	Function to suspend any Externol monitor ;
	function name suspendExternalMonitor
	$monitorIds monitor ids to deactivate comma separated list of ids
	$tag tag of monitor tests with this tag will be suspended.
			This param will be ignored if monitorIds is specified.
	*********************/
	public function suspendExternalMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("suspendExternalMonitor", $params);
		return $resp;
	}
	/*********************
	Function to activate Externol monitors ;
	function name activateExternalMonitor
	$monitorIds monitor ids to be activated comma separated list of ids
	$tag tag of monitor  tests with this tag will be activated.
		This param will be ignored if monitorIds is specified.
	*********************/
	public function activateExternalMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("activateExternalMonitor", $params);
		return $resp;
	}
}
?>