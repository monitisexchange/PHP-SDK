<?php
/****************************
Class to do actions realated to transactional monitors
Author:  Sandeep Bhola
Monitus Api
****************************/
class TransactionMonitor extends BaseMonitor
{
	/*********************
	constructor Function 
	function name ExternalMonitor
	*********************/
	public function FullpageloadMonitor() { }

	protected function getActionTransactionMonitor($action)
	{
		switch ($action) {
		case 5:
			return "transactionTests";
		case 6:
			return "transactionTestInfo";
		case 7:
			return "transactionTestResult";
		case 8:
			return "suspendTransactionMonitor";
		case 9:
			return "activateTransactionMonitor";
		default:
			return "Action is not supported";
		}
	}

	protected function getMonitorIdString()
	{
		return "monitorId";
	}
	/*********************
	Function to suspend any monitor ;
	function name suspendMonitors
	$monitorIds monitor ids to be activated
	$tag tag of monitor
	*********************/
	public function suspendTransactionMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("suspendTransactionMonitor", $params);
		return $resp;
	}
	/*********************
	Function to activate monitors ;
	function name activateMonitors
	$monitorIds monitor ids to be activated
	$tag tag of monitor
	*********************/
	public function activateTransactionMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("activateTransactionMonitor", $params);
		return $resp;
	}
	/*********************
	Function to get TransactionTests MOnitors or full load monitors;
	function name getTransactionTests
	$type	0 to get transaction monitors, 1 to get full page load monitors. default value is 0
	$output result to be reterieved in format xml or Json
	*********************/
	public function getTransactionTests($type = 0, $output = "")
	{
		$params["type"] = $type;
		$params["output"] = $output;		
		return parent::makeGetRequest("transactionTests", $params);
	}
	/*********************
	Function to get result Monitor
	function name getMonitorInfo
	$monitorId id of monitor to info to
	$tag tag to find
	$output out put type to get output of monitors lidt in Json or xml format
	*********************/
	public function getTransactionTestInfo($monitorId, $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["output"] = $output;
		$resp = parent::makeGetRequest("transactionTestInfo", $params);
		return $resp;
	}
	/*********************
	Function to get TransactionTestResult;
	function name getTransactionTestResult
	$monitorId* id of the monitor to get results for
	$locationIds comma separated ids of the locations to get results for. If not specified results will be retrieved for user's all locations.
	$year* year that results should be retrieved for
	$month*	month that results should be retrieved for
	$day* day that results should be retrieved for
	$timezone offset relative to GMT, used to show results in the timezone of the user
	$output result to be reterieved in format xml or Json
	*********************/
	public function getTransactionTestResult($monitorId, $year, $month, $day, $locationIds = "", $timezone = "", $output = "")
	{
		$params["monitorId"] = $monitorId;
		$params["year"] = $year;
		$params["month"] = $month;
		$params["day"] = $day;
		if($locationIds != "") $params["locationIds"] = $locationIds;
		if($timezone != "") $params["timezone"] = $timezone;
		$params["output"] = $output;
		$resp = parent::makeGetRequest($this->getActionTransactionMonitor(7), $params);
		return $resp;
	}	
	/*********************
	Function to get TransactionStepResult
	function name getTransactionStepResult
	$resultId*	id of the step result
	$output result to be reterieved in format xml or Json
	*********************/
	public function getTransactionStepResult($resultId, $output = "")
	{
		$params["output"] = $output;
		$params["resultId"] = $resultId;
		return parent::makeGetRequest("transactionStepResult", $params);
	}
	/*********************
	Function to get TransactionStepCapture
	function name getTransactionStepCapture
	$monitorId*	id of the monitor to get capture for
	$resultId*	id of the step result
	$output result to be reterieved in format xml or Json
	*********************/
	public function getTransactionStepCapture($monitorId , $resultId, $output = "")
	{
		$params["output"] = $output;
		$params["monitorId"] = $monitorId;
		$params["resultId"] = $resultId;
		return parent::makeGetRequest("transactionStepCapture", $params);
	}
	/*********************
	Function to get TransactionStepCapture
	function name getTransactionStepCapture
	$resultId *	 long	 id of the result
	$year*	year that results should be retrieved for
	$month*	month that results should be retrieved for
	$day* day that results should be retrieved for
	$output result to be reterieved in format xml or Json
	*********************/
	public function getTransactionStepNet($resultId, $day, $month, $year, $output = "")
	{
		$params["output"] = $output;
		$params["resultId"] = $resultId;
		$params["year"] = $year;
		$params["month"] = $month;
		$params["day"] = $day;
		return parent::makeGetRequest("transactionStepNet", $params);
	}
}
?>