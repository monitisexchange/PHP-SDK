<?php
/****************************
Class to do actions realated to internol http Monitor
Author:  Sandeep Bhola
Monitis Api
****************************/
class Agent extends RequestSender
{
	public function Agent() { }

	/*********************
	Function to delete internal monitors ;
	function name deleteInternalMonitors
	$testIds monitor ids to be activated
	*********************/
	public function getAgents($output = "", $keyRegExp = NULL)
	{
		$params["output"] = $output;
		if ($keyRegExp != NULL) $params["keyRegExp"] = $keyRegExp;
		$resp = parent::makeGetRequest("agents", $params);
		return $resp;
	}
	/*********************
	Function to get monitors agents Snapshot
	function name getAgentSnapshot
	$platform platform of the agents to get snapshot for (possible values are "LINUX", "WINDOWS", "OPENSOLARIS", "MAC", "FREEBSD")
	$timezone offset relative to GMT, used to show results in the timezone of the user; if not specified in request the default value is considered in GMT timezone.
tag	 string	 If specified only agents which have monitors with corresponding tag will be selected
	$output value xml result in xml result else in Json
	*********************/
	public function getAllAgentsSnapshot($timezone = "", $platform = "", $output = "")
	{
		$params["output"] = $output;
		if ($timezone != "")
			$params["timezone"] = $timezone;
		
		$params["platform"] = $platform;
		$resp = parent::makeGetRequest("allAgentsSnapshot", $params);
		return $resp;
	}
	/*********************
	Function to get monitors agents Snapshot
	function name getAgentSnapshot
	$agentKey* key of the agent to get Snapshot for
	$timezone offset relative to GMT, used to show results in the timezone of the user; if not specified in request the default value is considered in GMT timezone.
	$output value xml result in xml result else in Json
	*********************/
	public function getAgentSnapshot($agentKey, $timezone = "",  $output = "")
	{
		$params["output"] = $output;
		if (timezone != "")
			$params["timezone"] = $timezone;
		
		$params["agentKey"] = $agentKey;
		$resp = parent::makeGetRequest("agentSnapshot", $params);
		return $resp;
	}
	/*********************
	Function to get monitors agents info
	function name getAgentInfo
	$agentId monitor agent Id
	$loadTests if true response will contain information about tests on this agent. The default value id false.
	*********************/
	public function getAgentInfo($agentId, $loadTests = false, $output = "")
	{
		$params["output"] = $output;
		$params["agentId"] = $agentId;
		$params["loadTests"] = $loadTests;
		$resp = parent::makeGetRequest("agentInfo", $params);
		return $resp;
	}
	/*********************
	Function to delete monitors agents;
	function name deleteAgents
	$testIds monitor ids to be activated
	*********************/
	public function deleteAgents($agentIds, $keyRegExp = "")
	{
		if (agentIds != "") $params["agentIds"] = $agentIds;
		if (keyRegExp != "") $params["keyRegExp"] = $keyRegExp;
		$resp = parent::makePostRequest("deleteAgents", $params);
		return $resp;
	}
}
?>