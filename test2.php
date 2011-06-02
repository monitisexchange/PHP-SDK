<?php
include_once("api.php");
echo "<pre>";
####call of function to User key for registered User [parameters:  username(email), Password] 
//$resultgetUserkey = $Monitis_object->getUserKey("devesh.naswa@gmail.com", "000000"); //get Json result
//$resultgetUserkey = $Monitis_object->getUserKey("devesh.naswa@gmail.com", "000000", "xml"); //get xml result
//print_r($resultgetUserkey);
//echo "<br />";

####call of function to Authoriztion Token for registered User [parameters:  secret key]
//$resultgetAuth = $Monitis_object->getAuthToken("4UJ7BNQS27O0NNOIA74JBRIMF"); //get Json result only
//print_r($resultgetAuth);
//echo "<br />";

/*********************Sub Account**************************/
####call of function to Create sub account for registered User [parameters:  firstName, lastName, email, password, group]
//$resultSubAccAdd = $Monitis_object->addSubAccount("Parker", "Test1", "parker@123789.org", "a123456", "test_group1"); //get Json result only
//print_r($resultSubAccAdd);
//echo "<br />";

####call of function to add pages to sub account to do any action [parameters:  User id, array of page names to be permitted to that user]
//$resultAddPageSubAcc = $Monitis_object->addPagesToSubAccount(12641, array("Performance Report")); //get Json result only
//print_r($resultAddPageSubAcc);
//echo "<br />";

####call of function to delete pages to sub account to do any action [parameters:  User id, array of page names to be permitted to that user]
//$resultDelPageSubAcc = $Monitis_object->deletePagesFromSubAccount(12641, array("Performance Report")); //get Json result only
//print_r($resultDelPageSubAcc);
//echo "<br />";

####call of function to get pages added to sub accounts [parameters:  $output to get return in xml or default Json]
//$resultgetPageSubAcc = $Monitis_object->getSubAccountPages();
//$resultgetPageSubAcc = $Monitis_object->getSubAccountPages('xml');
//print_r($resultgetPageSubAcc);
//echo "<br />";

####call of function to get sub accounts for our Account[parameters:  $output to get return in xml or default Json]
//$resultgetSubAcc = $Monitis_object->getSubAccounts();
//$resultgetSubAcc = $Monitis_object->getSubAccounts('xml');
//print_r($resultgetSubAcc);
//echo "<br />";

####call of function to delete sub accounts for our Account[parameters:  $userId user id of account to delete]
//$resultgetSubAcc = $Monitis_object->deleteSubAccount(12537); //result only in json
//print_r($resultgetSubAcc);
//echo "<br />";

/*********************Layout**************************/
####call of function to add PAge for our Account[parameters: $title (page name), columnCount column in the page.]
//$resultAddPage = $Monitis_object->addPage("Test Page1"); //result only in json
//print_r($resultAddPage);
//echo "<br />";

####call of function to add PAge for our Account[parameters: $moduleName(External,Process,Drive,Memory,InternalHTTP,InternalPing,LoadAverage,CPU,Transaction,Fullpageload,VisitorsTracking), $pageId, $row(2), $column(4), $height = "", $dataModuleId = ""]
//$resultAddPageModule = $Monitis_object->addPageModule("External", 67515, 3, 4, 150, 1); //result only in json
//print_r($resultAddPageModule);
//echo "<br />";

####call of function to get PAge for our Account[parameters: $output  to get result in xml or json]
//$resultgetPages = $Monitis_object->getPages('xml');
//print_r($resultgetPages);
//echo "<br />";

####call of function to get PAge Module for our Page[parameters: $pageName page name for which modules to be searched,$output  to get result in xml or json]
//$resultgetPageModule = $Monitis_object->getpageModules("Test Page1");
//$resultgetPageModule = $Monitis_object->getpageModules("Test Page1", "xml");
//print_r($resultgetPageModule);
//echo "<br />";

####call of function to delete PAge Module for our Page[parameters: $pageName page name for which modules to be searched,$output  to get result in xml or json]
//$resultgetPageModuleDel = $Monitis_object->deletePageModule(207561);
//print_r($resultgetPageModuleDel);
//echo "<br />";

####call of function to delete PAge[parameters: $pageId id of page to delete,$output  to get result in xml or json]
//$resultDelPage = $Monitis_object->deletePage(66679);
//print_r($resultDelPage);
//echo "<br />";
/*********************Contact**************************/
####call of function to Add Contact[parameters: $firstName, $lastName, $account, $group = "", $country = "", $contactType, $timezone, $textType = "", $portable = "", $output = "", $sendDailyReport=NULL, $sendWeeklyReport=NULL, $sendMonthlyReport=NULL]
//$resultAddContact = $Monitis_object->addContact("Stuart", "Test", "parker@123789.org", "test_group1", "US", 1, 140, true, "", "xml");
//print_r($resultAddContact);
//echo "<br />";

####call of function to Get Contacts[parameters: $contactId, $firstName = "", $lastName="", $account="", $country = "", $contactType = "", $timezone = "", $textType = "", $portable = "", $code = "", $output = "", $sendDailyReport=NULL, $sendWeeklyReport=NULL, $sendMonthlyReport=NULL]
//$resultAddContact = $Monitis_object->getContacts('xml');
//print_r($resultAddContact);
//echo "<br />";

####call of function to Edit Contact[parameters: $contactId, $firstName = "", $lastName="", $account="", $country = "", $contactType = "", $timezone = "", $textType = "", $portable = "", $code = "", $output = "", $sendDailyReport=NULL, $sendWeeklyReport=NULL, $sendMonthlyReport=NULL]
//$resultEditContact = $Monitis_object->editContact("14242", "Stuart", "Test", "parker@123789.org", "US", 1, 240, true, "", "","xml");
//print_r($resultEditContact);
//echo "<br />";

####call of function to Get ContactGroups[parameters: $output to get output type xml or json]
//$resultAddContact = $Monitis_object->getContactGroups('xml');
//print_r($resultAddContact);
//echo "<br />";

####call of function to Get ContactAlerts[parameters: $timezone offset relative to GMT, $startDate start date of alerts, $endDate end date of alerts, $limit no of alerts to display, $output to get output type xml or json]
//$resultContactRecent = $Monitis_object->getRecentAlerts('xml');
//print_r($resultContactRecent);
//echo "<br />";

####call of function to Confirm Contact[parameters: contactId , confirmationKey]
//$resultContactConfirm = $Monitis_object->confirmContact(14386, '1438613067441971316852200298984967');
//print_r($resultContactConfirm);
//echo "<br />";

####call of function to deActivate Contact[parameters: contactId ]
//$resultContactdeactivate = $Monitis_object->deActivateContact(14386);
//print_r($resultContactdeactivate);
//echo "<br />";

####call of function to Activate Contact[parameters: contactId ]
//$resultContactactivate = $Monitis_object->activateContact(14386);
//print_r($resultContactactivate);
//echo "<br />";

/*********************Pre Defined Monitors**************************/

/********************Externol Monitors**********************/
####call of function to Add Externol Monitor[parameters: $name, $tag, $locationIds (comma seprated numbers), $url, $type (: "http", "https", "ftp", "ping", "ssh", "dns", "mysql", "udp", "tcp", "sip", "smtp", "imap", "pop".), $interval (1, 3, 5, 10, 15, 20, 30, 40, 60), $contentMatchString, $detailedTestType ( 1 for GET, 2 for POST, 3 for PUT, 4 for DELETE), $contentMatchFlag, $postData, $testParams, $timeout, $overSSL = 0]
//$resultEMactivate = $Monitis_object->addExternalMonitor("myExternol1", "myext_tag1", "1,2", "zedrox.com/signup.php", "http", 3, 0, 1, 1, "email=stuart@123789.org", "", 60);
//print_r($resultEMactivate);
//echo "<br />"; /*{"status":"ok","data":{"startDate":"2011-05-30 15:07","testId":55369,"isTestNew":"1"}}*/

####call of function to Add Externol Monitor[parameters: $testId, $name, $tag, $locationIds (comma seprated numbers as 1-5,2-10), $url, $contentMatchString, $timeout, $maxValue]
//$resultEMactivate = $Monitis_object->editExternalMonitor("55369", "myExternol1_edit", "myext_tag1", "2-3", "zedrox.com/signup.php", "email", 60, 240);
//print_r($resultEMactivate);
//echo "<br />"; /**/

####call of function to Suspend Externol Monitor[parameters: $monitorIds = NULL (id to suspend), $tag = NULL (id to suspend, ignored if id available)]
//$resultEMdeactivate = $Monitis_object->suspendExternalMonitor(55369);
//$resultEMdeactivate = $Monitis_object->suspendExternalMonitor('',"myext_tag1");
//print_r($resultEMdeactivate);
//echo "<br />";

####call of function to Avtivate Externol Monitor[parameters: $monitorIds = NULL (id to suspend), $tag = NULL (id to suspend, ignored if id available)]
//$resultEMactivate = $Monitis_object->activateExternalMonitor('',"myext_tag1");
//$resultEMactivate = $Monitis_object->activateExternalMonitor(55369);
//print_r($resultEMactivate);
//echo "<br />";

####call of function to get Externol Monitor locations[$output]
//$resultEMLocation = $Monitis_object->getExternalLocations('xml');
//print_r($resultEMLocation);
//echo "<br />";

####call of function to get Externol Monitor snapshot[$output, $locationIds]
//$resultEMSnapshot = $Monitis_object->getExternalSnapshot('xml', "1,3");
//print_r($resultEMSnapshot);
//echo "<br />";

####call of function to get Externol Monitor info[$output, $testid]
//$resultEMInfo = $Monitis_object->getExternolMonitorsInfo(55369, 'xml');
//print_r($resultEMInfo);
//echo "<br />";

####call of function to get Externol Monitor Result[$testId, $day, $month, $year, $locationIds = "", $timezone = "", $output = ""]
//$resultEMResult = $Monitis_object->getExternolMonitorsResult(55369, '30', '05', '2011', '1,3', "", "xml");
//$resultEMResult = $Monitis_object->getExternolMonitorsResult(55369, '30', '05', '2011', '1,3');
//print_r($resultEMResult);
//echo "<br />";

####call of function to get Externol Monitor tags[$output ]
//$resultEMtags = $Monitis_object->getExternalTags();
//print_r($resultEMtags);
//echo "<br />";

####call of function to get Externol Monitor by tags[$tag = "", $output = ""]
//$resultEMBytags = $Monitis_object->getExternalMonitorsByTags("myext_tag1");
//print_r($resultEMBytags);
//echo "<br />";

####call of function to get Externol Top Monitor[$output = ""]
//$resultEMTops = $Monitis_object->getExternalTops();
//print_r($resultEMTops);
//echo "<br />";

####call of function to get Externol Monitors[$output = ""]
//$resultEMs = $Monitis_object->getExternalMonitor();
//print_r($resultEMs);
//echo "<br />";

####call of function to delete Externol Monitors[$testIds (comma seprated IDs)]
//$resultEMs = $Monitis_object->deleteExternalMonitors("55369,55369");
//print_r($resultEMs);
//echo "<br />";

/********************Internol Monitors************************************************************/

####call of function to get Internol Monitors[]
//$resultIMs = $Monitis_object->getInternalMonitors();
//print_r($resultIMs);
//echo "<br /><br />";

####call of function to delete Internol Monitors[$testIds (comma seprated IDs)]
//$resultIMs = $Monitis_object->deleteInternalMonitors();
//print_r($resultIMs);
//echo "<br />";

/********************Agent Monitors**********************/
####call of function to get Internol Monitors Agents[$testIds (comma seprated IDs)]
//$resultIMAgents = $Monitis_object->getAgents("DEV2@02:06:2011:15:33:26");
//print_r($resultIMAgents);
//echo "<br />";

####call of function to get Internol Monitors All Agents Snapshots[$timezone , $platform , $output ]
//$resultIMAgents = $Monitis_object->getAllAgentsSnapshot();
//print_r($resultIMAgents);
//echo "<br />";

####call of function to get Internol Monitors Agents Snapshots[$timezone , $platform , $output ]
//$resultIMAgents = $Monitis_object->getAgentSnapshot("DEV2@02:06:2011:15:33:26");
//print_r($resultIMAgents);
//echo "<br />";

####call of function to get Internol Monitors Agents Info[$agentKey, $timezone = "",  $output = ""]
//$resultIMAgentInfo = $Monitis_object->getAgentInfo(7834);
//print_r($resultIMAgentInfo);
//echo "<br />";

####call of function to delete Internol Monitors Agents[$timezone , $platform , $output ]
//$resultIMAgentdel = $Monitis_object->deleteAgents($agentIds);
//print_r($resultIMAgentInfo);
//echo "<br />";
/********************CPU Monitors**********************/
####call of function to add Internol Monitors CPU[$agentkey, $name, $tag, $usedMax, $kernelMax, $niceMax = "", $idleMin, $ioWaitMax]
//$resultIMCpu = $Monitis_object->addCPUMonitor("DEV2@02:06:2011:15:33:26", "CPUMonitor", "cpu_tag1", 30, 40, 140, 20, 30);
//print_r($resultIMCpu);
//echo "<br /><br />";//3549

####call of function to get Internol Monitors CPU[$agentId, $output = ""]
//$resultIMCpuget = $Monitis_object->getCPUMonitors("7834");
//print_r($resultIMCpuget);
//echo "<br />";

####call of function to edit Internol Monitors CPU[$testId, $name, $tag, $usedMax, $kernelMax, $niceMax, $idleMin, $ioWaitMax]
//$resultIMCpu = $Monitis_object->editCPUMonitor("3549", "CPUMonitor", "tag1", 130, 80, 150, 120, 30);
//print_r($resultIMCpu);
//echo "<br />";

####call of function to edit Internol Monitors CPU info[$monitorId]
//$resultIMCpuInfo = $Monitis_object->getCPUInfo("3549");
//print_r($resultIMCpuInfo);
//echo "<br />";

####call of function to Internol Monitors CPU result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMCpuInfo = $Monitis_object->getCPUResult('3549', '02', '06', '2011', "15:33:26");
//print_r($resultIMCpuInfo);
//echo "<br />";

####call of function to Internol Monitors CPU tops[$output ]
//$resultIMCpuTops = $Monitis_object->getCPUTops();
//print_r($resultIMCpuTops);
//echo "<br />";

/********************Memory Monitors**********************/
####call of function to get Internol Monitors Memory[$agentId, $output = ""]
//$resultIMCpuTops = $Monitis_object->getMemoryMonitors("7834");
//print_r($resultIMCpuTops);
//echo "<br />";

####call of function to add Internol Monitors Memory[$agentkey, $name, $tag, $platform, $freeLimit, $freeVirtualLimit, $freeSwapLimit, $bufferedLimit, $cachedLimit]
//$resultIMCpuTops = $Monitis_object->addMemoryMonitor("DEV2@02:06:2011:15:33:26", "Memory1", "test_tag", "WINDOWS", "1.0", "2.0", "100", "1.0", "1.0");
//print_r($resultIMCpuTops);
//echo "<br />"; // [testId] => 3792

####call of function to ecit Internol Monitors Memory[$testId, $name, $tag, $platform, $freeLimit, $freeVirtualLimit, $freeSwapLimit, $bufferedLimit, $cachedLimit]
//$resultIMCpuTops = $Monitis_object->editMemoryMonitor("3792", "Memory2", "test_tag", "LINUX", "1.0", "2.0", "100", "1.0", "1.0");
//print_r($resultIMCpuTops);
//echo "<br />";

####call of function to Internol Monitors Memory Info[$monitorId , $output = ""]
//$resultIMMemInfo = $Monitis_object->getMemoryInfo("3792");
//print_r($resultIMMemInfo);
//echo "<br />";

####call of function to Internol Monitors Memory Result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMMemResult = $Monitis_object->getMemoryResult("3792" , '02', '06', '2011');
//print_r($resultIMMemResult);
//echo "<br />";

####call of function to Internol Monitors Memory Tops[$output = ""]
//$resultIMMemTops = $Monitis_object->getMemoryTops();
//print_r($resultIMMemTops);
//echo "<br />";

/********************Drive Monitors**********************/
####call of function to get Internol Monitors Memory Drives[$agentId, $output = ""]
//$resultIMDrive = $Monitis_object->getDriveMonitors("7834");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to add Internol Monitors Drives[$agentkey, $name, $tag, $driveLetter, $freeLimit]
//$resultIMDrive = $Monitis_object->addDriveMonitor("DEV2@02:06:2011:15:33:26", "DriveMonitor", "drive_test", "C", "1.0");
//print_r($resultIMDrive);
//echo "<br />"; /*[testId] => 14812*/

####call of function to edit Internol Monitors Drives[$testId, $name, $tag, $freeLimit]
//$resultIMDriveed = $Monitis_object->editDriveMonitor("14812", "DriveMonitor1", "drive_edit", "1.2");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Drives info[$monitorId , $output = ""]
//$resultIMDriveed = $Monitis_object->getDriveMonitorsInfo("14812");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Drives result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getDriveResult("14812", '02', '06', '2011');
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Drives topd[$output = "", $tag = "", $limit = "", $timezoneoffset = ""]
//$resultIMDriveed = $Monitis_object->getDriveTops("", "test", "1.0");
//print_r($resultIMDriveed);
//echo "<br />";
/********************Process Monitors**********************/
####call of function to Internol Monitors Memory Process[$agentId, $output = ""]
//$resultIMDrive = $Monitis_object->getProcessMonitors("7834");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to add Internol Monitors Process[$agentkey, $name, $tag, $processName, $cpuLimit, $memoryLimit, $virtualMemoryLimit]
//$resultIMDrive = $Monitis_object->addProcessMonitor("DEV2@02:06:2011:15:33:26", "ProcessMonitor", "process_test", "Excel", "1.0", "0.0", "1.2");
//print_r($resultIMDrive);
//echo "<br />";/*[testId] => 45708*/

####call of function to edit Internol Monitors Process[$testId, $name, $tag, $cpuLimit, $memoryLimit, $virtualMemoryLimit]
//$resultIMDriveed = $Monitis_object->editProcessMonitor("45708", "Process1Monitor", "process_edit", "1.0", "0.5", "10");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Process info[$monitorId , $output = ""]
//$resultIMDriveed = $Monitis_object->getProcessMonitorsInfo("45708");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Process result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getProcessResult("45708", '02', '06', '2011');
//print_r($resultIMDriveed);
//echo "<br />";

/********************Load Average Monitors**********************/
####call of function to Internol Monitors Memory Load Averare[$agentId, $output = ""]
//$resultIMDrive = $Monitis_object->getLoadAverageMonitors("7834");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to add Internol Monitors Load Averare[$agentkey, $name, $tag, $limit1, $limit5, $limit15]
//$resultIMDrive = $Monitis_object->addLoadAverageMonitor("DEV2@02:06:2011:15:33:26", "LoadAMonitor1", "load_test", "0.5", "1.0", "1.5");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to edit Internol Monitors Load Averare[$testId, $name, $tag, $limit1, $limit5, $limit15]
//$resultIMDriveed = $Monitis_object->editLoadAverageMonitor(123, "DriveMonitor", "load", "1.0", "1.5", "2.0");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Load Averare info[$monitorId , $output = ""]
//$resultIMDriveed = $Monitis_object->getLoadAverageMonitorsInfo(123);
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Load Averare result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getLoadAverageResult("123", "02", "06", '2011');
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Load Averare topd[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getTopLoad1();
//$resultIMDriveed = $Monitis_object->getTopLoad5();
//$resultIMDriveed = $Monitis_object->getTopLoad15();
//print_r($resultIMDriveed);
//echo "<br />";

/********************Http Monitors**********************/
####call of function to Internol Monitors Memory Http[$agentId, $output = ""]
//$resultIMDrive = $Monitis_object->getInternalHttpMonitors("7834");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to add Internol Monitors Http[$userAgentId, $name, $tag, $url, $httpMethod, $contentMatchString, $contentMatchFlag, $postData, $userAuth, $passAuth, $loadFull, $redirect, $timeout, $overSSL]
//$resultIMDrive = $Monitis_object->addInternolHttpMonitor("7834", "int_http_test", "tests_from_api", "http://localhost/phpmyadmin/index.php", 0, "", 0, "", "", "", 1, false, 30000, 0);
//print_r($resultIMDrive);
//echo "<br />"; /*[startDate] => 2011-06-02 18:01           [testId] => 2112*/

####call of function to edit Internol Monitors Http[$testId, $name, $tag, $urlParams, $httpMethod, $postData, $userAuth, $passAuth, $contentMatchString, $locations, $timeout, $maxValue]
//$resultIMDriveed = $Monitis_object->editInternolHttpMonitor("2112", "int_http_test1", "tests_from_test", "http://localhost/phpmyadmin/index.php", 0, "", "", "", "", "1", 30000, 60000);
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Http info[$monitorId , $output = ""]
//$resultIMDriveed = $Monitis_object->getInternalHttpMonitorsInfo("2112");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Http result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getInternalHttpResult("2112", '02', '06', '2011');
//print_r($resultIMDriveed);
//echo "<br />";

/********************Ping Monitors**********************/
####call of function to Internol Monitors Memory ping[$output = ""]
//$resultIMDrive = $Monitis_object->getPingMonitors("7834");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to add Internol Monitors Http[$userAgentId, $maxLost, $packetsCount, $packetsSize, $timeout, $url, $name, $tag]
//$resultIMDrive = $Monitis_object->addPingMonitor("7834", "2", "5", "32", "5000", "http://localhost/patriotenergygroup/signup.php", "ping", "tag");
//print_r($resultIMDrive);
//echo "<br />";

####call of function to edit Internol Monitors Http[$testId, $maxLost, $packetsCount, $packetsSize, $timeout, $url, $name, $tag]
//$resultIMDriveed = $Monitis_object->editPingMonitor("111", 60, 20, 200, 120, "zedrox.com/signup.php", "PingMOnitor", "tag");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Http info[$monitorId , $output = ""]
//$resultIMDriveed = $Monitis_object->getPingMonitorsInfo("123");
//print_r($resultIMDriveed);
//echo "<br />";

####call of function to Internol Monitors Http result[$monitorId, $day, $month, $year, $timezone = "", $output = ""]
//$resultIMDriveed = $Monitis_object->getPingResult(123, '02', '06', '2011');
//print_r($resultIMDriveed);
//echo "<br />";


################333##################
######################################3
//print_r($Monitis_object);
//echo "------------------"; exit;
#####################################
//call of function to get Contacts
//$resultCon = $Monitis_object->getContacts();
//print_r($resultCon);
//echo "<br />";
#####################################
//call of function to get Pages
//$resultLpages = $Monitis_object->getPages();
//print_r($resultLpages);
//echo "<br />";
#####################################
//call of function to create a sub account
//$resultAddSubAc = $Monitis_object->addSubAccount("Robin", "Test", "robin@123789.org", "a123456", "test_group");
//print_r($resultAddSubAc);
//echo "<br />";
//{"status":"ok","data":{"userId":12537}}
//{"status":"ok","data":{"userId":12548}}
//{"status":"ok","data":{"userId":12550}}
//[{"id":12537,"lastName":"Test","account":"stuart@123789.org","firstName":"Stuart","userkey":"3QLSSFU3C314U1AO13ISBTLK2J"},{"id":12548,"lastName":"Test","account":"parker@123789.org","firstName":"Parker","userkey":"56RUKA339BNUV8SQQ1T50J0JPV"},{"id":12550,"lastName":"Test","account":"robin@123789.org","firstName":"Robin","userkey":"50ID95DJP37E71AGV2LU0SCUR1"}]1

//call of function to get allsub accounts
//$resultSacc = $Monitis_object->getSubAccounts();
//print_r($resultSacc);
//echo "<br />";

//call of function to share your page with sub account
//$resultSaccPages = $Monitis_object->addPagesToSubAccount("12537", array("Notifications"));
//print_r($resultSaccPages);
//echo "<br />";

//call of function to delete any shared page with sub account
//$resultSaccPagesdel = $Monitis_object->deletePagesFromSubAccount(12537, array("Summary"));
//print_r($resultSaccPagesdel);
//echo "<br />";

//call of function to delete any sub account
//$resultdelSacc = $Monitis_object->deleteSubAccount(12550);
//print_r($resultdelSacc);
//echo "<br />";

//call of function to get allsub accounts
//$resultSaccPages = $Monitis_object->getSubAccountPages();
//print_r($resultSaccPages);
//echo "<br />";
#####################################
//call of function to add custom monitor api
//$resultAddMoni = $Monitis_object->addMonitor("Monitor2", "Monitor2_Stuart", "position1:Position1:NA:2;", "");
//print_r($resultAddMoni);
//echo "<br />";
//{"status":"ok","data":295}    {"status":"ok","data":296}

//call of function to edit custom monitor api
//$resultEditMoni = $Monitis_object->editMonitor("295", "Monitor3", "Monitor_Stuart");
//print_r($resultEditMoni);
//echo "<br />";
//{"status":"ok","data":null}

//call of function to delete custom monitor api
//$resultDelMoni = $Monitis_object->deleteMonitor("296");
//print_r($resultDelMoni);
//echo "<br />";
//{"status":"ok","data":null}

//call of function to add result custom monitor api
//$resultDelMoni = $Monitis_object->addResult("295", time(), "paramName1:paramValue1");
//print_r($resultDelMoni);
//echo "<br />";
//{"status":"ok","data":null}

//call of function to add result custom monitor api
//$resultGetMoniInfo = $Monitis_object->getMonitorInfo("295", false);
//print_r($resultGetMoniInfo);
//echo "<br />";

//call of function to get custom monitor api
//$resultgetMon = $Monitis_object->getMonitors();
//print_r($resultgetMon);
//echo "<br />";

#########################
//call of function to add externol monitor api
//$resultgetMoni = $Monitis_object->addExternalMonitor("ExternolMonitor1", "test1", "1", "patriatgrp.softdemonew.info/login.php", "http", 60, "pat", 2, 1, "email=stuart@123789.org", "Username:value1;password:value2;", 60, 0);
//print_r($resultgetMoni);
//echo "<br />";
//{"status":"ok","data":{"startDate":"2011-05-27 18:55","testId":55279,"isTestNew":"1"}}

//call of function to edit externol monitor api
//$resulteditEM = $Monitis_object->editExternalMonitor(55279, "ExternolMonitorEdit", "test1", "1-5", "patriatgrp.softdemonew.info/login.php", "test", 2, 60);
//print_r($resulteditEM);
//echo "<br />";

//call of function to suspend externol monitor api
//$resultsuspendEM = $Monitis_object->suspendExternalMonitor(55279);
//print_r($resultsuspendEM);
//echo "<br />";

//call of function to activate externol monitor api
//$resultsuspendEM = $Monitis_object->activateExternalMonitor(55279);
//print_r($resultsuspendEM);
//echo "<br />";

//call of function to get locations monitor api
//$resultfindEM = $Monitis_object->getExternalLocations();
//print_r($resultfindEM);
//echo "<br />";

//call of function to get locations monitor api
//$resultfindEM = $Monitis_object->getExternalTops();
//print_r($resultfindEM);
//echo "<br />";

//call of function to get externol snapsots monitor api
//$resultfindEM = $Monitis_object->getExternalSnapshot("", "5");
//print_r($resultfindEM);
//echo "<br />";

//call of function to get tags monitor api
//$resultfindEM = $Monitis_object->getExternalTags();
//print_r($resultfindEM);
//echo "<br />";

//call of function to get locations monitor api
//$resultfindEM = $Monitis_object->getExternalMonitorsByTags("test1");
//print_r($resultfindEM);
//echo "<br />";
//{"testList":[{"id":55279,"name":"ExternolMonitorEdit"}]}1

//call of function to delete externol monitor api
//$resultfindEM = $Monitis_object->getExternalMonitor();
//print_r($resultfindEM);
//echo "<br />";

//call of function to delete externol monitor api
//$resultfindEM = $Monitis_object->deleteExternalMonitors("55280");
//print_r($resultfindEM);
//echo "<br />";
###############

//call of function to get externol monitor api
//$resultgetTag = $Monitis_object->getTags();
//print_r($resultgetTag);
//echo "<br />";

//call of function to get externol monitor api
//$resultMonByTag = $Monitis_object->getMonitorsByTags("test");
//print_r($resultMonByTag);
//echo "<br />";

//getTransactionTests($type = 0, $output = "")
//$resultgetMon = $Monitis_object->getTransactionTests();
//print_r($resultgetMon);
//echo "<br />";

//call of function to get externol monitor api
//$resultMonByTag = $Monitis_object->suspendTransactionMonitor(295);
//print_r($resultMonByTag);
//echo "<br />";

//call of function to get Full load monitor
//addFullPageLoadMonitor($name, $tag, $locationIds, $url, $checkInterval , $timeout, $uptimeSLA = "", $responseSLA = "")
//$resultMonByTag = $Monitis_object->addFullPageLoadMonitor("FillloadMOnitor1", "Fulltags1", "1", "www.asd.com", 20*60, 60, 20, 120);
//print_r($resultMonByTag);
//echo "<br />";
//{"status":"ok","data":{"testId":3037}}

//addFullPageLoadMonitor($name, $tag, $locationIds, $url, $checkInterval , $timeout, $uptimeSLA = "", $responseSLA = "")
//$resultMonByTag = $Monitis_object->addFullPageLoadMonitor("Fillload", "tag2", "2", "www.abc.com", 20*60, 60, 20, 120);
//print_r($resultMonByTag);
//echo "<br />";
//{"status":"ok","data":{"testId":3038}}

//suspendFullPageLoadMonitor($monitorIds = NULL, $tag = NULL)
//$resultMonByTag = $Monitis_object->suspendFullPageLoadMonitor(3038);
//print_r($resultMonByTag);
//echo "<br />";

//activateFullPageLoadMonitor($monitorIds = NULL, $tag = NULL)
//$resultMonByTag = $Monitis_object->activateFullPageLoadMonitor(3038);
//print_r($resultMonByTag);
//echo "<br />";

//getVisitorTrackers($output = "")
//$resultMonByTag = $Monitis_object->getVisitorTrackers();
//print_r($resultMonByTag);
//echo "<br />";

//getVisitorTrackerInfo($siteId, $output = "")
//$resultMonByTag = $Monitis_object->getVisitorTrackerInfo(1);
//print_r($resultMonByTag);
//echo "<br />";

//getMonitorVisitorTrackerResults($siteId, $year, $month, $day, $timezoneoffset = "", $output = "")
//$resultMonByTag = $Monitis_object->getMonitorVisitorTrackerResults("1", 2011, 5, 27);
//print_r($resultMonByTag);
//echo "<br />";

//call of function to get custom monitor api
//$resultgetMon = $Monitis_object->getMonitors();
//print_r($resultgetMon);
//echo "<br />";
##################Transactional
//call of function to get get TransactionTests MOnitors[$type = 0, $output = ""]
//$resultgetMon = $Monitis_object->getTransactionTests();
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$monitorId, $year, $month, $day, $locationIds = "", $timezone = "", $output = ""]
//$resultgetMon = $Monitis_object->getTransactionTestResult("2112", "02", "06", "2011", "1");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$resultId, $output = ""]
//$resultgetMon = $Monitis_object->getTransactionStepResult("123");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$resultId, $output = ""]
//$resultgetMon = $Monitis_object->getTransactionStepResult("123");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$monitorId , $resultId, $output = ""]
//$resultgetMon = $Monitis_object->getTransactionStepCapture("123", "1");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$resultId, $year, $month, $day, $output = ""]
//$resultgetMon = $Monitis_object->getTransactionStepNet("123", "02", "06", "2011");
//print_r($resultgetMon);
//echo "<br />";

###############Cloud
//call of function to get get TransactionTests MOnitors[$output = "", $timezoneoffset = NULL]
//$resultgetMon = $Monitis_object->getInstances("123", "02", "06", "2011");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get TransactionTests MOnitors[$timezone = "", $type, $instanceId, $output = ""]
//$resultgetMon = $Monitis_object->getCloudInstanceInfo("", "gogrid", "1");
//print_r($resultgetMon);
//echo "<br />";

###############Full Load
//call of function to get get Full Load MOnitors[$name, $tag, $locationIds, $url, $checkInterval, $timeout, $uptimeSLA = "", $responseSLA = ""]
//$resultgetMon = $Monitis_object->addFullPageLoadMonitor("Fullload1", "full_test", "1,2", "http://localhost/phpmyadmin/", 1000, 2000);
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get Full Load MOnitors[$monitorId, $name, $tag, $locationIds, $url, $checkInterval, $timeout, $uptimeSLA = "", $responseSLA = ""]
//$resultgetMon = $Monitis_object->editFullPageLoadMonitor("1012", "Fullload4", "full_test", "20", "http://localhost/phpmyadmin/", 5000, 7000);
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get Full Load MOnitors[$monitorIds = NULL, $tag = NULL]
//$resultgetMon = $Monitis_object->suspendFullPageLoadMonitor("", "full_test");
//print_r($resultgetMon);
//echo "<br />";

//call of function to get get Full Load MOnitors[$monitorIds = NULL, $tag = NULL]
$resultgetMon = $Monitis_object->activateFullPageLoadMonitor("", "full_test");
print_r($resultgetMon);
echo "<br />";
?>