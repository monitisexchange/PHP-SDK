<?php
/****************************
Class to do actions realated to internol http Monitor
Author:  Sandeep Bhola
Monitus Api
****************************/
class InternalHttpMonitor extends InternalMonitor
{
	public function InternalHttpMonitor() {  }

	protected function getAction($action)
	{
		switch ($action) {
		case 5:
			return "agentHttpTests";
		case 6:
			return "internalHttpInfo";
		case 7:
			return "internalHttpResult";
		default:
			return "Action is not supported";
		}
	}
	/******************************
	Function to add Internal Http Monitors;
	function name addInternolHttpMonitor
	$userAgentId id of the agent to add monitor for
	$contentMatchString* text to match in the response
	$httpMethod* specifies request method(possible values are 0 for GET, 1 for POST and 2 for HEAD)
	$passAuth* password for authentication(actual only if overSSL is 1)
	$userAuth* userName for authentication(actual only if overSSL is 1)
	$postData* This is actual if test is of type POST. It is the data sent during the post request. (e.g m_U=asd&m_P=asd)
	$urlParams* additional parametrs to add to test URL(key1=value1&key2=value2)
	$redirect 0 or 1 set to 1 to follow redircts
	$loadFull 0 or 1 if 1 test will wait for page load
	$timeout* test timeout in ms
	$name* name of the monitor
	$overSSL 0 or 1	 if 1 requests will be sent via SSL
	$tag* tag of the test
	******************************/
	public function addInternolHttpMonitor($userAgentId, $name, $tag, $url, $httpMethod, $contentMatchString, $contentMatchFlag, $postData, $userAuth, $passAuth, $loadFull, $redirect, $timeout, $overSSL)
	{
		$params["userAgentId"] = $userAgentId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		$params["url"] = $url;
		$params["httpMethod"] = $httpMethod;
		$params["contentMatchString"] = urlencode($contentMatchString);
		$params["contentMatchFlag"] = $contentMatchFlag;
		$params["userAuth"] = $userAuth;
		$params["passAuth"] = $passAuth;
		$params["postData"] = urlencode($postData);
		$params["timeout"] = $timeout;
		$params["overSSL"] = $overSSL;
		$params["redirect"] = $redirect;
		$params["loadFull"] = $loadFull;
		
		$resp = parent::makePostRequest("addInternalHttpMonitor", $params);
		return $resp;
	}
	/******************************
	Function to edit Internal Http Monitors;
	function name editInternolHttpMonitor
	$testId* id of the test to edit
	$contentMatchString* text to match in the response
	$httpMethod* specifies request method(possible values are 0 for GET, 1 for POST and 2 for HEAD)
	$passAuth* password for authentication(actual only if overSSL is 1)
	$userAuth* userName for authentication(actual only if overSSL is 1)
	$postData* This is actual if test is of type POST. It is the data sent during the post request. (e.g m_U=asd&m_P=asd)
	$urlParams* additional parametrs to add to test URL(key1=value1&key2=value2)
	$timeout* test timeout in ms
	$name* name of the monitor
	$tag* tag of the test
	******************************/
	public function editInternolHttpMonitor($testId, $name, $tag, $urlParams, $httpMethod, $postData, $userAuth, $passAuth, $contentMatchString, $locations, $timeout, $maxValue)
	{
		$params["testId"] = $testId;
		$params["name"] = urlencode($name);
		$params["tag"] = urlencode($tag);
		if(is_array($locations))
			$params["locations"] = implode($locations, ",");
		else
			$params["locations"] = $locations;
		$params["contentMatchString"] = urlencode($contentMatchString);
		$params["timeout"] = $timeout;
		$params["maxValue"] = $maxValue;
		$params["urlParams"] = $urlParams;
		$params["userAuth"] = $userAuth;
		$params["passAuth"] = $passAuth;
		$params["postData"] = $postData;
		$params["httpMethod"] = $httpMethod;
		
		$resp = parent::makePostRequest("editInternalHttpMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Http Monitors;
	function name getInternalHttpMonitors
	$agentId* id of the agent
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getInternalHttpMonitors($agentId, $output = "")
	{
		$params["agentId"] = $agentId;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("agentHttpTests", $params);
		return $resp;
	}
	/*********************
	Function to get Internal Http Monitor Info;
	function name getInternalHttpMonitorsInfo
	$monitorId* id of the test to get results for
	$output if it is xml them output will be genrated in xml else in Json
	*********************/
	public function getInternalHttpMonitorsInfo($monitorId , $output = "")
	{
		$params["monitorId"] = $monitorId ;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("internalHttpInfo", $params);
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
	public function getInternalHttpResult($monitorId, $day, $month, $year, $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["day"] = $day;
		$params["month"] = $month;
		$params["year"] = $year;
		if($timezone != "")$params["timezone"] = $timezone;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("internalHttpResult", $params);
		return $resp;
	}
}
?>