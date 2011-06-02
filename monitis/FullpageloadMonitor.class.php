<?php
/****************************
Class to do actions realated to fill load monitors
Author:  Sandeep Bhola
Monitus Api
****************************/
class FullpageloadMonitor extends BaseMonitor
{
	/*********************
	constructor Function 
	function name ExternalMonitor
	*********************/
	public function FullpageloadMonitor() { }
	
	protected function getActionFullPageloadMonitor($action)
	{
		switch ($action) {
		case 5:
			return "fullPageLoadTests";
		case 6:
			return "fullPageLoadTestInfo";
		case 7:
			return "fullPageLoadTestResult";
		case 8:
			return "suspendTransactionMonitor";
		case 9:
			return "activateTransactionMonitor";
		default:
			return "Action is not supported";
		}
	}
  /*********************
	Function to add Monitor
	function name addMonitor
	$name* name of the monitor... must be URL encoded.
	$tag* tag of the test... must be URL encoded.
	$locationIds* comma separated ids of the locations to add
	$url* url of the monitor
	$type*: Supported types are: "http", "https", "ftp", "ping", "ssh", "dns", "mysql", "udp", "tcp", "sip", "smtp", "imap", "pop".
	$interval* check interval in minutes
	$timeout* timeout in ms
	$uptimeSLA min allowed uptime(%)
	$responseSLA max allowd response time in seconds
	*********************/
	public function addFullPageLoadMonitor($name, $tag, $locationIds, $url, $checkInterval, $timeout, $uptimeSLA = "", $responseSLA = "")
	{
		$params["name"] = parent::myurlEncode($name);
		$params["tag"] = parent::myurlEncode($tag);
		if(is_array($locationIds))
			$params["locationIds"] = implode(",", $locationIds);
		else
			$params["locationIds"] = $locationIds;
		$params["url"] = $url;
		$params["type"] = $type;
		$params["checkInterval"] = $checkInterval;		
		$params["timeout"] = $timeout;
		if($uptimeSLA != "") $params["uptimeSLA"] = $uptimeSLA;
		if($responseSLA != "") $params["responseSLA"] = $responseSLA;
		
		$resp = parent::makePostRequest("addFullPageLoadMonitor", $params);
		return $resp;
	}
	/*********************
	Function to edit FullPageLoadMonitor
	function name editFullPageLoadMonitor
	$name* name of the monitor... must be URL encoded.
	$tag* tag of the test... must be URL encoded.
	$locationIds* comma separated ids of the locations to add
	$url* url of the monitor
	$type*: Supported types are: "http", "https", "ftp", "ping", "ssh", "dns", "mysql", "udp", "tcp", "sip", "smtp", "imap", "pop".
	$interval* check interval in minutes
	$timeout* timeout in ms
	$uptimeSLA min allowed uptime(%)
	$responseSLA max allowd response time in seconds
	*********************/
	public function editFullPageLoadMonitor($monitorId, $name, $tag, $locationIds, $url, $checkInterval, $timeout, $uptimeSLA = "", $responseSLA = "")
	{
		$params["monitorId"] = parent::myurlEncode($monitorId);
		$params["name"] = parent::myurlEncode($name);
		$params["tag"] = parent::myurlEncode($tag);
		if(is_array($locationIds))
			$params["locationIds"] = implode(",", $locationIds);
		else
			$params["locationIds"] = $locationIds;
		$params["url"] = $url;
		$params["type"] = $type;
		$params["checkInterval"] = $checkInterval;		
		$params["timeout"] = $timeout;
		if($uptimeSLA != "") $params["uptimeSLA"] = $uptimeSLA;
		if($responseSLA != "") $params["responseSLA"] = $responseSLA;
		
		$resp = parent::makePostRequest("editFullPageLoadMonitor", $params);
		return $resp;
	}
	/*********************
	Function to suspend any monitor ;
	function name suspendMonitors
	$monitorIds monitor ids to be activated
	$tag tag of monitor
	*********************/
	public function suspendFullPageLoadMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("suspendFullPageLoadMonitor", $params);
		return $resp;
	}
	/*********************
	Function to activate monitors ;
	function name activateMonitors
	$monitorIds comma separated list of ids of the monitors to suspend
	$tag  this tag will be suspended.
	*********************/
	public function activateFullPageLoadMonitor($monitorIds = NULL, $tag = NULL)
	{
		if ($monitorIds != NULL) $params["monitorIds"] = $monitorIds;
		if ($tag != NULL) $params["tag"] = $tag;
		$resp = parent::makePostRequest("activateFullPageLoadMonitor", $params);
		return $resp;
	}

	protected function getMonitorIdString() {
		return "monitorId";
	}
}
?>