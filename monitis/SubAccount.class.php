<?php
/****************************
Class for Subaccounts
Author:  Sandeep Bhola
Monitis Api
****************************/
class SubAccount extends RequestSender
{
	public function SubAccount() { }
	/*********************
	Function to get SubAccounts
	function name getSubAccounts
	$output to assign return type xml or Json
	*********************/
	public function getSubAccounts($output = "")
	{
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("subAccounts", $params);
	}
	/*********************
	Function to get SubAccountPages
	function name getSubAccountPages
	$output to assign return type xml or Json
	*********************/
	public function getSubAccountPages($output = "")
	{
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("subAccountPages", $params);
	}
	/*********************
	Function to add SubAccount
	function name addSubAccount
	$firstName* first name of the sub account owner
	$lastName* last name of the sub account owner
	$email* email address which will be used as username for the sub account
	$password* password of the sub account
	$group* group of the sub account
	*********************/
	public function addSubAccount($firstName, $lastName, $email, $password, $group)
	{
		$params["firstName"] = $firstName;
		$params["lastName"] = $lastName;
		$params["email"] = $email;
		$params["password"] = $password;
		$params["group"] = $group;
		return parent::makePostRequest("addSubAccount", $params);
	}
	/*********************
	Function to delete SubAccount
	function name deleteSubAccount
	$userId* userID of account to delete to
	*********************/
	public function deleteSubAccount($userId)
	{
		$params["userId"] = $userId;
		return parent::makePostRequest("deleteSubAccount", $params);
	}
	/*********************
	Function to add Pages To SubAccount
	function name addPagesToSubAccount
	$userId* userID of account where pages have to add
	$pageNames is array of pages names to create and  names of your pages you want to share with your sub account separated via ";"
	SHare your existing Pages with Subaccount
	*********************/
	public function addPagesToSubAccount($userId, $pageNames = array())
	{
		$params["userId"] = $userId;
		$params["pageNames"] = implode(";", $pageNames);
		return parent::makePostRequest("addPagesToSubAccount", $params);
	}
	/*********************
	Function to delte Pages To SubAccount
	function name deletePagesFromSubAccount
	$userId* userID of account where pages have to add
	$pageNames is array of pages names to delte
	*********************/
	public function deletePagesFromSubAccount($userId, $pageNames = array())
	{
		$params["userId"] = $userId;
		$params["pageNames"] = implode(";", $pageNames);//StringUtils.arrayToString(pageNames, ";", 0, pageNames.length));
		return parent::makePostRequest("deletePagesFromSubAccount", $params);
	}
}
?>