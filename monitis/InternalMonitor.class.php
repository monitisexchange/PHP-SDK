<?php
/****************************
Class to do actions realated to internol Monitor
Author:  Sandeep Bhola
Monitis Api
****************************/
class InternalMonitor extends BaseMonitor
{
	private $type;

	public function InternalMonitor() {	}

	public function getType() {
		return $this->type;
	}
	/*********************
	Function to delete internal monitors ;
	function name deleteInternalMonitors
	$testIds monitor ids to be activated
	*********************/
	public function deleteInternalMonitors($testIds)
	{
		$params["type"] = $this->type;
		if(is_array($testIds))
			$params["testIds"] = implode($testIds, ",");
		else
			$params["testIds"] = $testIds;
		$resp = parent::makePostRequest("deleteInternalMonitors", $params);
		return $resp;
	}
	/*********************
	Function to get internal monitors ;
	function name getInternalMonitors
	$types 
		comma separated monitor types, if not defined monitors of all types will be returned. Possible values for each type are
			memory
			load
			drive
			process
			cpu
			agentHttpTest
			agentPingTest
	$tag tag of the monitors to get. If tagRegExp and tag are defined monitors for all tags will be returned.
	$tagRegExp tag of the monitors to get represented as a RegEx. If tagRegExp and tag are not defined monitors for all tags will be returned.
	*********************/
	public function getInternalMonitors($types = "", $tag = "", $tagRegExp = "", $output = "")
	{
		if($types != "") $params["types"] = $types;
		if($tag != "") $params["tag"] = $tag;
		$params["output"] = $output;
		
		$resp = parent::makeGetRequest("internalMonitors", $params);
		return $resp;
	}  
}