<?php

/*
+---------------------------------------------------------------------------+
| OpenX v2.8                                                                |
| ==========                                                                |
|                                                                           |
| Copyright (c) 2003-2009 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: maintenance.lang.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/


// Main strings
$GLOBALS['strChooseSection']			= "์?์ญ ์ ํ?";


// Priority
$GLOBALS['strRecalculatePriority']		= "์ฐ์ ์์ ๋ค์ ๊ณ์ฐ";
$GLOBALS['strHighPriorityCampaigns']		= "๋์? ์ฐ์ ์์ ์บ ํ์?ธ";
$GLOBALS['strAdViewsAssigned']			= "ํ ๋น๋? AdViews";
$GLOBALS['strLowPriorityCampaigns']		= "๋ฎ์? ์ฐ์ ์์ ์บ ํ์?ธ";
$GLOBALS['strPredictedAdViews']			= "์์? AdViews";
$GLOBALS['strPriorityDaysRunning']		= "์?ผ์?ผ ์์?์น๋ฅผ ๊ธฐ์ค์ผ๋ก {days}์?ผ ์ ๋? ๋จ์์์ต๋๋ค.";
$GLOBALS['strPriorityBasedLastWeek']		= "์ง๋์ฃผ์ ๊ธ์ฃผ์? ๋?ฐ์?ดํฐ๋ฅผ ํ ๋๋ก ์์? ๋ธ์ถ์ ๊ณ์ฐ. ";
$GLOBALS['strPriorityBasedLastDays']		= "์ต๊ทผ ๋ฉฐ์น ๊ฐ์? ๋?ฐ์?ดํฐ๋ฅผ ํ ๋๋ก ์์? ๋ธ์ถ์ ๊ณ์ฐ. ";
$GLOBALS['strPriorityBasedYesterday']		= "์ด์  ๋?ฐ์?ดํฐ๋ฅผ ๊ธฐ์ค์ผ๋ก ์์? ๋ธ์ถ์ ๊ณ์ฐ. ";
$GLOBALS['strPriorityNoData']			= "There isn't enough data available to make a reliable prediction about the number of impressions this adserver will generate today. Priority assignments will be based on real time statistics only. ";
$GLOBALS['strPriorityEnoughAdViews']		= "There should be enough AdViews to fully satisfy the target all high priority campaigns. ";
$GLOBALS['strPriorityNotEnoughAdViews']		= "It isn't clear wether there will be enough AdViews served today to satisfy the target all high priority campaigns. ";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "๋ฐฐ๋ ์บ?์ ๋ค์ ๋น๋";
$GLOBALS['strBannerCacheExplaination']		= "\n	The banner cache contains a copy of the HTML code which is used to display the banner. By using a banner cache it is possible to speed\n	up the delivery of banners because the HTML code doesn't need to be generated every time a banner is being delivered. Because the\n	banner cache contains hard coded URLs to the location of ".MAX_PRODUCT_NAME." and its banners, the cache needs to be updated\n	everytime ".MAX_PRODUCT_NAME." is moved to another location on the webserver.\n";


// Cache
$GLOBALS['strCache']			= "์ ๋ฌ์ ์ง ์บ?์";
$GLOBALS['strAge']				= "Age";
$GLOBALS['strRebuildDeliveryCache']			= "์ ๋ฌ์ ์ง ์บ?์ ๋ค์ ๋น๋";
$GLOBALS['strDeliveryCacheExplaination']		= "\n	์ ๋ฌ์ ์ง ์บ?์(delivery cache)๋ ๋ฐฐ๋๋ฅผ ๋น ๋ฅด๊ฒ ์ ๋ฌํ๊ธฐ ์ํด ์ฌ์ฉํ๋ ๋ฐฉ๋ฒ์?ด๋ค.\n	The cache contains a copy of all the banners\n	which are linked to the zone which saves a number of database queries when the banners are actually delivered to the user. The cache\n	is usually rebuild everytime a change is made to the zone or one of it's banners, it is possible the cache will become outdated. Because\n	of this the cache will automatically rebuild every hour, but it is also possible to rebuild the cache manually.\n";
$GLOBALS['strDeliveryCacheSharedMem']		= "\nํ์ฌ ์ ๋ฌ์ ์ง ์บ?์๋ฅผ ์ ์ฅํ๊ธฐ ์ํด ๊ณต์  ๋ฉ๋ชจ๋ฆฌ๋ฅผ ์ฌ์ฉํ๊ณ  ์์ต๋๋ค. \n";
$GLOBALS['strDeliveryCacheDatabase']		= "\nํ์ฌ ์ ๋ฌ์ ์ง ์บ?์๋ฅผ ์ ์ฅํ๊ธฐ ์ํด ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค๋ฅผ ์ฌ์ฉํ๊ณ  ์์ต๋๋ค. \n";


// Storage
$GLOBALS['strStorage']				= "์ ์ฅ์?์ญ";
$GLOBALS['strMoveToDirectory']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค์? ์ ์ฅ๋? ์?ด๋ฏธ์ง๋ฅผ ๋๋ ํฐ๋ฆฌ๋ก ์ฎ๊ธฐ๊ธฐ";
$GLOBALS['strStorageExplaination']		= "\n๋ก์ปฌ ๋ฐฐ๋๋ก ์ฌ์ฉํ๋ ์?ด๋ฏธ์ง๋ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๋?๋ ๋๋ ํฐ๋ฆฌ์? ์ ์ฅ๋?์ด ์์ต๋๋ค. ์?ด๋ฏธ์ง๋ฅผ ๋๋ ํฐ๋ฆฌ์? ์ ์ฅํ ๊ฒฝ์ฐ์?๋ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค์? ๋ํ ๋ถํ๋ฅผ ์ค์์ผ๋ก์?จ ์?๋?๋ฅผ ํฅ์?์ํฌ ์ ์์ต๋๋ค.\n";


// Storage
$GLOBALS['strStatisticsExplaination']		= "\n	You have enabled the <i>compact statistics</i>, but your old statistics are still in verbose format.\n	Do you want to convert your verbose statistics to the new compact format?\n";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "์๋?ฐ์?ดํธ๋ฅผ ๊ฒ์์ค์๋๋ค. ์ ์ ๊ธฐ๋ค๋ ค์ฃผ์ญ์์ค...";
$GLOBALS['strAvailableUpdates']			= "์?ด์ฉํ  ์ ์๋ ์๋?ฐ์?ดํธ";
$GLOBALS['strDownloadZip']			= "๋ค์ด๋ก๋(.zip)";
$GLOBALS['strDownloadGZip']			= "๋ค์ด๋ก๋(.tar.gz)";

$GLOBALS['strUpdateAlert']			= MAX_PRODUCT_NAME."์? ์ ๋ฒ์ ์? ์?ด์ฉํ  ์ ์์ต๋๋ค.\\n\\n์ ์๋?ฐ์?ดํธ์? ๋ํ ์?์ธํ ์ ๋ณด๋ฅผ ๋ณด๊ฒ ์ต๋๊น?";
$GLOBALS['strUpdateAlertSecurity']		= MAX_PRODUCT_NAME."์? ์ ๋ฒ์ ์? ์?ด์ฉํ  ์ ์์ต๋๋ค.\\n\\n์ ๋ฒ์ ์? ํ๋ ๋?๋ ๊ทธ ์?ด์?์? ๋ณด์ ์์ ์? ํ?ฌํจํ๊ณ  ์์ผ๋ฏ๋ก ๊ฐ๋ฅํํ ๋นจ๋ฆฌ ์๊ทธ๋ ์?ด๋ํ  ๊ฒ์? ๊ถํฉ๋๋ค.";

$GLOBALS['strUpdateServerDown']			= "\n    Due to an unknown reason it isn't possible to retrieve <br>\n	information about possible updates. Please try again later.\n";

$GLOBALS['strNoNewVersionAvailable']		= "\n	ํ์ฌ ์ฌ์ฉ์ค์?ธ ". MAX_PRODUCT_NAME ."์? ๋ฒ์ ์? ์ต์ ์๋๋ค. ํ์ฌ ์?ด์ฉํ  ์ ์๋ ์๋?ฐ์?ดํธ๊ฐ ์์ต๋๋ค.\n";

$GLOBALS['strNewVersionAvailable']		= "\n	<b>A new version of ".MAX_PRODUCT_NAME." is available.</b><br> It is recommended to install this update,\n	because it may fix some currently existing problems and will add new features. For more information\n	about upgrading please read the documentation which is included in the files below.\n";

$GLOBALS['strSecurityUpdate']			= "\n	<b>It is highly recommended to install this update as soon as possible, because it contains a number\n	of security fixes.</b> The version of ".MAX_PRODUCT_NAME." which you are currently using might\n	be vulnerable to certain attacks and is probably not secure. For more information\n	about upgrading please read the documentation which is included in the files below.\n";

$GLOBALS['strNotAbleToCheck']			= "\n	<b>Because the XML extention isn't available on your server, ".MAX_PRODUCT_NAME." is not\n    able to check if a newer version is available.</b>\n";

$GLOBALS['strForUpdatesLookOnWebsite']	= "\n	You are currently running ".MAX_PRODUCT_NAME." ".$phpAds_version_readable.".\n	If you want to know if there is a newer version available, please take a look at our website.\n";

$GLOBALS['strClickToVisitWebsite']		= "\n	Click here to visit our website\n";


// Stats conversion
$GLOBALS['strConverting']			= "๋ณํ์ค";
$GLOBALS['strConvertingStats']			= "ํต๊ณ๋ฅผ ๋ณํ์ค์๋๋ค...";
$GLOBALS['strConvertStats']			= "ํต๊ณ ๋ณํ";
$GLOBALS['strConvertAdViews']			= "AdViews ๋ณํ,";
$GLOBALS['strConvertAdClicks']			= "AdClicks ๋ณํ...";
$GLOBALS['strConvertNothing']			= "๋ณํํ  ๊ฒ์?ด ์์ต๋๋ค...";
$GLOBALS['strConvertFinished']			= "์๋ฃ...";

$GLOBALS['strConvertExplaination']		= "\n	You are currently using the compact format to store your statistics, but there are <br>\n	still some statistics in verbose format. As long as the verbose statistics aren't  <br>\n	converted to compact format they will not be used while viewing these pages.  <br>\n	Before converting your statistics, make a backup of the database!  <br>\n	Do you want to convert your verbose statistics to the new compact format? <br>\n";

$GLOBALS['strConvertingExplaination']		= "\n	All remaining verbose statistics are now being converted to the compact format. <br>\n	Depending on how many impressions are stored in verbose format this may take a  <br>\n	couple of minutes. Please wait until the conversion is finished before you visit other <br>\n	pages. Below you will see a log of all modification made to the database. <br>\n";

$GLOBALS['strConvertFinishedExplaination']  	= "\n	The conversion of the remaining verbose statistics was succesful and the data <br>\n	should now be usable again. Below you will see a log of all modification made <br>\n	to the database.<br>\n";




// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strEncodingConvert'] = "๋ณํ";
?>