<?php
/****************************
Class to do actions realated to pages creation 
Author:  Sandeep Bhola
Monitis Api
****************************/
class Layout extends RequestSender
{
	
	public function Layout() { }
	/*********************
	Function to get pages
	function name getPages
	$output to assign return type xml or Json
	*********************/
	public function getPages($output = "")
	{
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("pages", $params);
	}
	/*********************
	Function to get pages
	function name getPages
	$output to assign return type xml or Json
	*********************/
	public function getpageModules($pageName, $output = "")
	{
		$params["pageName"] = $pageName;
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("pageModules", $params);
	}
	/*********************
	Function to add page
	function name addPage
	$title to assign name to the title
	$columnCount will give number of columns to be added to page
	*********************/
	public function addPage($title, $columnCount = "")
	{
		$params["title"] = $title;
		$params["columnCount"] = $columnCount;
		return parent::makePostRequest("addPage", $params);
	}
	/*********************
	Function to add page module
	function name addPageModule
	$action addPageModule
	$moduleNamea
		External
		Process
		Drive
		Memory
		InternalHTTP
		InternalPing
		LoadAverage
		CPU
		Transaction
		Fullpageload
		VisitorsTracking
	$pageId id of the page to add module to
	$row number of rows to add module to
	$column number of columns to add module to
	$dataModuleId 
		id of the test to add view for for example if moduleName=External dataModuleId should be id of the External monitor, which results you want to be shown on the page
	$height module height (default 200px)
	*********************/
	public function addPageModule($moduleName, $pageId, $row, $column, $height = "", $dataModuleId = "")
	{
		$params["moduleName"] = $moduleName;
		$params["pageId"] = $pageId;
		$params["row"] = $row;
		$params["column"] = $column;
		if ($height != "") $params["height"] = $height;
		if ($dataModuleId != "") $params["dataModuleId"] = $dataModuleId;
		return parent::makePostRequest("addPageModule", $params); 
	}
	/*********************
	Function to delete Page
	function name deletePage
	$pageId* pageId of page to delete to
	*********************/
	public function deletePage($pageId)
	{
		$params["pageId"] = $pageId;
		return parent::makePostRequest("deletePage", $params);
	}
	/*********************
	Function to delete Page
	function name deletePage
	$pageId* pageId of page to delete to
	*********************/
	public function deletePageModule($pageModuleId)
	{
		$params["pageModuleId"] = $pageModuleId;
		return parent::makePostRequest("deletePageModule", $params);
	}
}
?>