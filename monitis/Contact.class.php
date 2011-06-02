<?php
/****************************
Class to do actions realted to contact
Author:  Sandeep Bhola
Monitus Api
****************************/
class Contact extends RequestSender
{
	
	public function Contact() { }
	/*********************
	Function to create a new contacts for this account
	function name addContact
	
	$output is to set return type if xml it will return xml return else Json result
	
	$firstName is first name of person tobe added for contact
	$lastName is last name of person tobe added for contact
	$account depending on contact type specifies we fill account information: 
		email address for mail contact,
		phone number for SMS, Phone Call and SMS and Call,
		account identifiers for ICQ, Google and Twitter,
		URL callback for URL.
	$group the contact will be added to given group. A new group will be created if a group with such name doesn't exist.
	$contactType is the type of contact 
		1 - for Email contact,
		2 - for SMS contact,
		3 - ICQ,
		7 - Google,
		8 - Twitter,
		9 - Phone Call,
		10 - SMS and Call
		11 - URL
	$timezone timezone offset from GMT in minute use time with gmstrftime('%M',time()+60) type
	$textType "true" or "false" to get HTML formatted alerts.
	$portable only for "SMS" and "SMS and Call" contact types. "true" if mobile number was moved from one operator to another under the 'number portability' system.	
	$sendDailyReport "true" or "false" to get daily reports
	$sendWeeklyReport "true" or "false" to get weekly reports
	$sendMonthlyReport "true" or "false" to get monthly reports
	*********************/
	public function addContact($firstName, $lastName, $account, $group = "", $country = "", $contactType, $timezone, $textType = "", $portable = "", $output = "", $sendDailyReport=NULL, $sendWeeklyReport=NULL, $sendMonthlyReport=NULL)
	{
		$params = array();
		$params["firstName"] =  $firstName;
		$params["lastName"] = $lastName;
		$params["account"] = $account;
		$params["contactType"] = $contactType;
		if($group!="") $params["group"] = $group;
		$params["timezone"] = $timezone;
		if ($country != "") $params["country"] = $country;
		if ($textType != "") $params["textType"] = $textType;
		if ($portable != "") $params["portable"] = $portable;
		if ($sendDailyReport != NULL) $params["sendDailyReport"] = $sendDailyReport;
		if ($sendWeeklyReport != NULL) $params["sendWeeklyReport"] = $sendWeeklyReport;
		if ($sendMonthlyReport != NULL) $params["sendMonthlyReport"] = $sendMonthlyReport;
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makePostRequest("addContact", $params);
	}
	/*********************
	Function to create a new contacts for this account
	function name addContact
	
	$output is to set return type if xml it will return xml return else Json result
	
	$firstName is first name of person tobe added for contact
	$lastName is last name of person tobe added for contact
	$account depending on contact type specifies we fill account information: 
		email address for mail contact,
		phone number for SMS, Phone Call and SMS and Call,
		account identifiers for ICQ, Google and Twitter,
		URL callback for URL.
	$contactType is the type of contact 
		1 - for Email contact,
		2 - for SMS contact,
		3 - ICQ,
		7 - Google,
		8 - Twitter,
		9 - Phone Call,
		10 - SMS and Call
		11 - URL
	$timezone timezone offset from GMT in minute use time with gmstrftime('%M',time()+60) type
	$textType "true" or "false" to get HTML formatted alerts.
	$portable only for "SMS" and "SMS and Call" contact types. "true" if mobile number was moved from one operator to another under the 'number portability' system.	
	$sendDailyReport "true" or "false" to get daily reports
	$sendWeeklyReport "true" or "false" to get weekly reports
	$sendMonthlyReport "true" or "false" to get monthly reports	
	$code confirm your contact by making "edit contact" API call and by puting confirmation code in this parameter.
	*********************/
	public function editContact($contactId, $firstName = "", $lastName="", $account="", $country = "", $contactType = "", $timezone = "", $textType = "", $portable = "", $code = "", $output = "", $sendDailyReport=NULL, $sendWeeklyReport=NULL, $sendMonthlyReport=NULL)
	{
		$params["contactId"] = $contactId;
		if ($firstName != "") $params["firstName"] =  $firstName;
		if ($lastName != "") $params["lastName"] = $lastName;
		if ($account != "") $params["account"] = $account;
		if ($contactType != "") $params["contactType"] = $contactType;
		if ($timezone != "") $params["timezone"] = $timezone;
		if ($country != "") $params["country"] = $country;
		if ($textType != "") $params["textType"] = $textType;
		if ($portable != "") $params["portable"] = $portable;
		if ($sendDailyReport != NULL) $params["sendDailyReport"] = $sendDailyReport;
		if ($sendWeeklyReport != NULL) $params["sendWeeklyReport"] = $sendWeeklyReport;
		if ($sendMonthlyReport != NULL) $params["sendMonthlyReport"] = $sendMonthlyReport;
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		
		if ($code != "") $params["code"] = $code;
		return parent::makePostRequest("editContact", $params);
	}
	/*********************
	Function to delete a contacts from this account
	function name deleteContact
	$action is type of action  deleteContact
	$contactType set to:
		1 - for Email contact,
		2 - for SMS contact,
		3 - ICQ,
		7 - Google,
		8 - Twitter,
		9 - Phone Call,
		10 - SMS and Call
		11 - URL 
	$account account information depending on contact type: 
		email address for mail contact,
		phone number for SMS, Phone Call and SMS and Call,
		account identifiers for ICQ, Google and Twitter,
		URL callback for URL.
	*********************/
	public function deleteContact($contactId = NULL, $contactType = NULL, $account = NULL)
	{
		if ($contactId != NULL) $params["contactId"] = $contactId;
		if ($contactType != NULL) $params["contactType"] = $contactType;
		if ($account != NULL) $params["account"] = $account;
		return parent::makePostRequest("deleteContact", $params);
	}
	/*********************
	Function to confirm contact
	function name confirmContact
	$contactId contactID of contact
	$confirmationKey confirmationKey for that contact
	*********************/
	public function confirmContact($contactId, $confirmationKey)
	{
		$params["contactId"] = $contactId;
		$params["confirmationKey"] = $confirmationKey;
		return parent::makePostRequest("confirmContact", $params);
	}
	/*********************
	Function to activate contact
	function name activateContact
	$contactId contactID for contact to activate
	*********************/
	public function activateContact($contactId)
	{
		$params["contactId"] = $contactId;
		return parent::makePostRequest("contactActivate", $params);
	}
	/*********************
	Function to deactivate contact
	function name deActivateContact
	$contactId contactID for contact to deactivate
	*********************/
	public function deActivateContact($contactId)
	{
		$params["contactId"] = $contactId;
		return parent::makePostRequest("contactDeactivate", $params);
	}
	/*********************
	Function to get contacts for this account
	function name getContacts
	$output is to set return type if xml it will return xml return else Json result
	*********************/
	public function getContacts($output = "") {
		//$params = new HashMap();
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("contactsList", $params);
	}
	/*********************
	Function to get contacts group for this account
	function name getContactGroups
	$output is to set return type if xml it will return xml return else Json result
	*********************/
	public function getContactGroups($output = "")
	{
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("contactGroupList", $params);
	}
	/*********************
	Function to get recent alerts for this account
	function name getRecentAlerts
	$timezone offset relative to GMT, used to retrieve results in the given timezone. The default value is 0.
	$startDate start date to get results
	$endDate end date to get results
	$limit limit(number of alerts) for alerts to get
	$output is to set return type if xml it will return xml return else Json result
	*********************/
	public function getRecentAlerts($timezone = "", $startDate = "", $endDate = "", $limit = "", $output = "")
	{
		if ($timezone != "") $params["timezone"] = $timezone;
		if ($startDate != "") $params["startDate"] = $startDate;
		if ($endDate != "") $params["endDate"] = $endDate;
		if ($limit != "") $params["limit"] = $limit;
		if($output=="xml") {
			$params["output"] = $output;
		} else {
			$params["output"] = "";
		}
		return parent::makeGetRequest("recentAlerts", $params);
	}
}
?>