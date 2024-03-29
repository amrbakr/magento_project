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
$Id: settings.lang.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/



// Installer translation strings
$GLOBALS['strInstall']				= "์ค์น";
$GLOBALS['strChooseInstallLanguage']		= "์ค์น์? ์ฌ์ฉํ  ์ธ์ด๋ฅผ ์ ํ?ํ์ธ์.";
$GLOBALS['strLanguageSelection']		= "์ธ์ด ์ ํ?";
$GLOBALS['strDatabaseSettings']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ค์ ";
$GLOBALS['strAdminSettings']			= "๊ด๋ฆฌ์? ์ค์ ";
$GLOBALS['strAdvancedSettings']			= "๊ณ ๊ธ ์ค์ ";
$GLOBALS['strOtherSettings']			= "๊ธฐํ ์ค์ ";

$GLOBALS['strWarning']				= "๊ฒฝ๊ณ ";
$GLOBALS['strFatalError']			= "์น๋ช์ ?์?ธ ์ค๋ฅ๊ฐ ๋ฐ์?ํ์ต๋๋ค.";
$GLOBALS['strAlreadyInstalled']			= MAX_PRODUCT_NAME."์?ด ์?ด๋ฏธ ์์คํ์? ์ค์น๋?์ด ์์ต๋๋ค. ์ค์ ์? ํ๋ ค๋ฉด <a href='settings-index.php'>์ค์  ์?ธํฐํ์?ด์ค</a>๋ฅผ ์ฌ์ฉํ์ญ์์ค.";
$GLOBALS['strCouldNotConnectToDB']		= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค์? ์ฐ๊ฒฐํ  ์ ์์ต๋๋ค. ์๋ ฅํ ์ค์ ์?ด ๋ง๋์ง ๋ค์ ํ์?ธํ์ญ์์ค.";
$GLOBALS['strCreateTableTestFailed']		= "์๋ ฅ๋? ์ฌ์ฉ์?๋ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ตฌ์กฐ๋ฅผ ์?์ฑํ๊ฑฐ๋ ์๋?ฐ์?ดํธํ  ์ ์๋ ๊ถํ์?ด ์์ต๋๋ค. ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ด๋ฆฌ์?์?๊ฒ ๋ฌธ์?ํ์ญ์์ค.";
$GLOBALS['strUpdateTableTestFailed']		= "์๋ ฅ๋? ์ฌ์ฉ์?๋ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ตฌ์กฐ๋ฅผ ์๋?ฐ์?ดํธํ  ์ ์๋ ๊ถํ์?ด ์์ต๋๋ค. ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ด๋ฆฌ์?์?๊ฒ ๋ฌธ์?ํ์ญ์์ค..";
$GLOBALS['strTablePrefixInvalid']		= "ํ์?ด๋ธ ์ ๋?์ด๋ก ์ฌ์ฉํ  ์ ์๋ ๋ฌธ์?๊ฐ ์์ต๋๋ค.";
$GLOBALS['strTableInUse']			= "์ง์ ๋? ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค๋ ์?ด๋ฏธ".MAX_PRODUCT_NAME."์?์ ์ฌ์ฉํ๊ณ  ์์ต๋๋ค. ๋ค๋ฅธ ํ์?ด๋ธ ์ ๋?์ด๋ฅผ ์ฌ์ฉํ๊ฑฐ๋ ์๊ทธ๋ ์?ด๋ ์ง์นจ์๋ฅผ ์ฐธ๊ณ ํ์ญ์์ค.";
$GLOBALS['strMayNotFunction']			= "๊ณ์? ์งํํ๊ธฐ ์ ์? ๋ฌธ์ ๋ฅผ ์์ ํ์ญ์์ค. ๋ฌธ์ ๋ฅผ ์์ ํ์ง ์๊ณ  ์งํํ๋ฉด ๋ฌธ์ ๊ฐ ๋ฐ์?ํ  ์ ์์ต๋๋ค:";
$GLOBALS['strIgnoreWarnings']			= "๊ฒฝ๊ณ  ๋ฌด์";
$GLOBALS['strWarningDBavailable']		= "ํ์ฌ ์ฌ์ฉ์ค์?ธ PHP๋ ".$phpAds_dbmsname." ์ฐ๊ฒฐ์? ์ง์?ํ์ง ์์ต๋๋ค. PHP ".$phpAds_dbmsname." ํ์ฅ์? ์ค์นํ ๋ค์?์? ๊ณ์? ์งํํ์ญ์์ค.";
$GLOBALS['strWarningPHPversion']		= MAX_PRODUCT_NAME." requires PHP 4.0 or higher to function correctly. You are currently using {php_version}.";
$GLOBALS['strWarningRegisterGlobals']		= "PHP ์ค์  ๋ณ์ register_globals๋ฅผ ์ค์ ํด์ผ ํฉ๋๋ค.";
$GLOBALS['strWarningMagicQuotesGPC']		= "PHP ์ค์  ๋ณ์ magic_quotes_gpc๋ฅผ ์ค์ ํด์ผ ํฉ๋๋ค.";
$GLOBALS['strWarningMagicQuotesRuntime']	= "PHP ์ค์  ๋ณ์ magic_quotes_runtime์? ์ ๊ฑฐํด์ผํฉ๋๋ค.";
$GLOBALS['strWarningFileUploads']		= "PHP ์ค์  ๋ณ์ file_uploads๋ฅผ ์ค์ ํด์ผ ํฉ๋๋ค.";
$GLOBALS['strConfigLockedDetected']		= MAX_PRODUCT_NAME." has detected that your <b>config.inc.php</b> file is not writeable by the server.<br> You can't proceed until you change permissions on the file. <br>Read the supplied documentation if you don't know how to do that.";
$GLOBALS['strCantUpdateDB']  			= "ํ์ฌ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค๋ฅผ ๊ฐฑ์ ํ  ์ ์์ต๋๋ค. ๊ณ์? ์งํํ๋ฉด ๊ธฐ์กด์? ์ค์ ํ ๋ฐฐ๋, ํต๊ณ, ๊ด๊ณ ์ฃผ๊ฐ ๋ชจ๋? ์ญ์ ๋?ฉ๋๋ค.";
$GLOBALS['strTableNames']			= "ํ์?ด๋ธ ์?ด๋ฆ";
$GLOBALS['strTablesPrefix']			= "ํ์?ด๋ธ ์ ๋?์ด";
$GLOBALS['strTablesType']			= "ํ์?ด๋ธ ์ข๋ฅ";

$GLOBALS['strInstallWelcome']			= "ํ์?ํฉ๋๋ค. ".MAX_PRODUCT_NAME;
$GLOBALS['strInstallMessage']			= "Before you can use ".MAX_PRODUCT_NAME." it needs to be configured and <br> the database needs to be created. Click <b>Proceed</b> to continue.";
$GLOBALS['strInstallSuccess']			= "<b>The installation of ".MAX_PRODUCT_NAME." is now complete.</b><br><br>In order for ".MAX_PRODUCT_NAME." to function correctly you also need\n						   to make sure the maintenance file is run every hour. More information about this subject can be found in the documentation.\n						   <br><br>Click <b>Proceed</b> to go the configuration page, where you can\n						   set up more settings. Please do not forget to lock the config.inc.php file when you are finished to prevent security\n						   breaches.";
$GLOBALS['strUpdateSuccess']			= "<b>The upgrade of ".MAX_PRODUCT_NAME." was succesfull.</b><br><br>In order for ".MAX_PRODUCT_NAME." to function correctly you also need\n						   to make sure the maintenance file is run every hour (previously this was every day). More information about this subject can be found in the documentation.\n						   <br><br>Click <b>Proceed</b> to go to the administration interface. Please do not forget to lock the config.inc.php file\n						   to prevent security breaches.";
$GLOBALS['strInstallNotSuccessful']		= "<b>The installation of ".MAX_PRODUCT_NAME." was not succesful</b><br><br>Some portions of the install process could not be completed.\n						   It is possible these problems are only temporarily, in that case you can simply click <b>Proceed</b> and return to the\n						   first step of the install process. If you want to know more on what the error message below means, and how to solve it,\n						   please consult the supplied documentation.";
$GLOBALS['strErrorOccured']			= "๋ค์? ์ค๋ฅ๊ฐ ๋ฐ์?ํ์ต๋๋ค:";
$GLOBALS['strErrorInstallDatabase']		= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ตฌ์กฐ๊ฐ ์?์ฑ๋?์ง ์์์ต๋๋ค.";
$GLOBALS['strErrorInstallConfig']		= "์ค์  ํ์?ผ ๋?๋ ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค๋ฅผ ์๋?ฐ์?ดํธํ  ์ ์์ต๋๋ค.";
$GLOBALS['strErrorInstallDbConnect']		= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค์ ์ฐ๊ฒฐํ  ์ ์์ต๋๋ค.";

$GLOBALS['strUrlPrefix']			= "URL ์ ๋?์ด";

$GLOBALS['strProceed']				= "๊ณ์? >";
$GLOBALS['strRepeatPassword']			= "๋น๋ฐ๋ฒํธ ํ์?ธ";
$GLOBALS['strNotSamePasswords']			= "๋น๋ฐ๋ฒํธ๊ฐ ์?ผ์นํ์ง ์์ต๋๋ค.";
$GLOBALS['strInvalidUserPwd']			= "์๋ชป๋? ์ฌ์ฉ์? ID ๋?๋ ๋น๋ฐ๋ฒํธ์๋๋ค.";

$GLOBALS['strUpgrade']				= "์๊ทธ๋ ์?ด๋";
$GLOBALS['strSystemUpToDate']			= "์์คํ์? ๊ตฌ์ฑ์์๊ฐ ์?ด๋ฏธ ์ต์  ๋ฒ์ ์๋๋ค. ์ง๊ธ ์๊ทธ๋ ์?ด๋ํ  ์ ์์ต๋๋ค.<br> ํํ์?ด์ง๋ก ์?ด๋?ํ๋ ค๋ฉด <b>๊ณ์?</b>์? ํ?ด๋ฆญํ์ธ์.";
$GLOBALS['strSystemNeedsUpgrade']		= "์์คํ์?ด ์ฌ๋ฐ๋ฅด๊ฒ ๋?์ํ๋ ค๋ฉด ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๊ตฌ์กฐ์ ์ค์  ํ์?ผ์? ์๊ทธ๋ ์?ด๋ํด์ผ ํฉ๋๋ค. ์์คํ์? ์๊ทธ๋ ์?ด๋ํ๊ธฐ ์ํด <b>๊ณ์?</b>์? ํ?ด๋ฆญํ์ญ์์ค.<br>์์คํ์? ์๊ทธ๋ ์?ด๋ํ๋ ๋?ฐ ๋ช ๋ถ ์ ๋? ๊ฑธ๋ฆด ์ ์์ต๋๋ค.";
$GLOBALS['strSystemUpgradeBusy']		= "์์คํ์? ์๊ทธ๋ ์?ด๋์ค์๋๋ค. ์ ์ ๊ธฐ๋ค๋ ค์ฃผ์ญ์์ค...";
$GLOBALS['strSystemRebuildingCache']		= "์บ?์๋ฅผ ์ฌ๊ตฌ์ถ์ค์๋๋ค. ์ ์ ๊ธฐ๋ค๋ ค์ฃผ์ญ์์ค...";
$GLOBALS['strServiceUnavalable']		= "์์คํ์? ์๊ทธ๋ ์?ด๋ ์ค์?ด๋ฏ๋ก ์๋น์ค๋ฅผ ์ ์๋?์ ์?ด์ฉํ  ์ ์์ต๋๋ค.";

$GLOBALS['strConfigNotWritable']		= "config.inc.php ํ์?ผ์? ์ฐ๊ธฐ๋ฅผ ํ  ์ ์์ต๋๋ค.";





/*********************************************************/
/* Configuration translations                            */
/*********************************************************/

// Global
$GLOBALS['strChooseSection']			= "์?์ญ ์ ํ?";
$GLOBALS['strDayFullNames'][0] = "์?ผ์์?ผ";
$GLOBALS['strDayFullNames'][1] = "์์์?ผ";
$GLOBALS['strDayFullNames'][2] = "ํ์์?ผ";
$GLOBALS['strDayFullNames'][3] = "์์์?ผ";
$GLOBALS['strDayFullNames'][4] = "๋ชฉ์์?ผ";
$GLOBALS['strDayFullNames'][5] = "๊ธ์์?ผ";
$GLOBALS['strDayFullNames'][6] = "ํ ์์?ผ";

$GLOBALS['strEditConfigNotPossible']   		= "๋ณด์์? ์ค์  ํ์?ผ์?ด ์ ๊ฒจ์๊ธฐ ๋๋ฌธ์?ด ์ค์ ์? ๋ณ๊ฒฝํ  ์ ์์ต๋๋ค. \n์ค์ ์? ๋ณ๊ฒฝํ๋ ค๋ฉด config.inc.php ํ์?ผ์? ์ ๊ธ์? ํด์ ํ์ญ์์ค.\n";
$GLOBALS['strEditConfigPossible']		= "์ค์  ํ์?ผ์?ด ์ ๊ฒจ์์ง ์๊ธฐ ๋๋ฌธ์? ๋ชจ๋  ์ค์ ์? ํธ์งํ๋ ๊ฒ์?ด ๊ฐ๋ฅํ์ง๋ง, ์?ด๋ก์?ธํด ๋ณด์ ๋ฌธ์ ๊ฐ ๋ฐ์?ํ  ์ ์์ต๋๋ค.\n์์คํ์? ์์ ํ๊ฒ ํ๋ ค๋ฉด config.inc.php ํ์?ผ์? ์ ๊ธ์? ์ค์ ํด์ผ ํฉ๋๋ค.\n";



// Database
$GLOBALS['strDatabaseSettings']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ค์ ";
$GLOBALS['strDatabaseServer']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์๋ฒ";
$GLOBALS['strDbHost']				= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ํธ์คํธ๋ช";
$GLOBALS['strDbUser']				= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ฌ์ฉ์?์?ด๋ฆ";
$GLOBALS['strDbPassword']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ๋น๋ฐ๋ฒํธ";
$GLOBALS['strDbName']				= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์?ด๋ฆ";

$GLOBALS['strDatabaseOptimalisations']		= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ต์ ?ํ";
$GLOBALS['strPersistentConnections']		= "์ฐ๊ฒฐ ์ ์ง(persistent connection) ์ฌ์ฉ";
$GLOBALS['strInsertDelayed']			= "์ง์ฐ๋? ์ฝ์ ์ฌ์ฉ";
$GLOBALS['strCompatibilityMode']		= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ํธํ ๋ชจ๋ ์ฌ์ฉ";
$GLOBALS['strCantConnectToDb']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค์? ์ฐ๊ฒฐํ  ์ ์์ต๋๋ค.";



// Invocation and Delivery
$GLOBALS['strInvocationAndDelivery']		= "๋ฐฐ๋ ํธ์ถ ๋ฐ? ์ ๋ฌ์ ์ง ์ค์ ";

$GLOBALS['strAllowedInvocationTypes']		= "ํ์ฉ๋? ๋ฐฐ๋ ํธ์ถ ์ข๋ฅ";
$GLOBALS['strAllowRemoteInvocation']		= "์?๊ฒฉ ๋ฐฐ๋ ํธ์ถ ํ์ฉ";
$GLOBALS['strAllowRemoteJavascript']		= "์?๊ฒฉ ๋ฐฐ๋ ํธ์ถ ํ์ฉ(Javascript)";
$GLOBALS['strAllowRemoteFrames']		= "์?๊ฒฉ ๋ฐฐ๋ ํธ์ถ ํ์ฉ(ํ๋ ์)";
$GLOBALS['strAllowRemoteXMLRPC']		= "๋ฐฐ๋ ํธ์ถ ํ์ฉ(XML-RPC)";
$GLOBALS['strAllowLocalmode']			= "๋ก์ปฌ ๋ชจ๋ ํ์ฉ";
$GLOBALS['strAllowInterstitial']		= "๊ฒฉ์?ํ(Interstitial) ํ์ฉ";
$GLOBALS['strAllowPopups']			= "ํ?์ ํ์ฉ";

$GLOBALS['strUseAcl']				= "๋ฐฐ๋ ์ ์ก์ค์? ์ ๋ฌ ์ ์ง ์ ํ ํ?๊ฐ";

$GLOBALS['strDeliverySettings']			= "์ ๋ฌ ์ ์ง ์ค์ ";
$GLOBALS['strCacheType']				= "์ ๋ฌ ์ ์ง ์บ?์ ์ข๋ฅ";
$GLOBALS['strCacheFiles']				= "ํ์?ผ";
$GLOBALS['strCacheDatabase']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค";
$GLOBALS['strCacheShmop']				= "๊ณต์  ๋ฉ๋ชจ๋ฆฌ(shmop)";
$GLOBALS['strKeywordRetrieval']			= "ํค์๋ ๊ฒ์";
$GLOBALS['strBannerRetrieval']			= "๋ฐฐ๋ ๊ฒ์ ๋ฐฉ๋ฒ";
$GLOBALS['strRetrieveRandom']			= "๋๋?ค ๋ฐฐ๋ ๊ฒ์(๊ธฐ๋ณธ)";
$GLOBALS['strRetrieveNormalSeq']		= "๋ฐฐ๋ ๊ฒ์(์?ผ๋ฐ)";
$GLOBALS['strWeightSeq']			= "๊ฐ์ค์น๋ก ๋ฐฐ๋ ๊ฒ์";
$GLOBALS['strFullSeq']				= "์ ์ฒด ๋ฐฐ๋ ๊ฒ์";
$GLOBALS['strUseConditionalKeys']		= "์ง?์  ์ ํ?์? ์ฌ์ฉํ  ๋ ๋ผ๋ฆฌ ์ฐ์ฐ์?๋ฅผ ํ์ฉํฉ๋๋ค.";
$GLOBALS['strUseMultipleKeys']			= "์ง?์  ์ ํ?์? ์ฌ์ฉํ  ๋ ๋ค์์? ํค์๋๋ฅผ ํ์ฉํฉ๋๋ค.";

$GLOBALS['strZonesSettings']			= "์?์ญ ๊ฒ์";
$GLOBALS['strZoneCache']			= "์บ?์ ์?์ญ, ์บ?์ ์?์ญ์? ์ฌ์ฉํ๋ฉด ์?์ญ์? ์ฌ์ฉํ  ๋ ์?๋?๋ฅผ ๋น ๋ฅด๊ฒ ํฉ๋๋ค.";
$GLOBALS['strZoneCacheLimit']			= "์บ?์ ์๋?ฐ์?ดํธ ๊ฐ๊ฒฉ(์ด ๋จ์)";
$GLOBALS['strZoneCacheLimitErr']		= "์๋?ฐ์?ดํธ ๊ฐ๊ฒฉ์?๋ ์?์๋ฅผ ์ฌ์ฉํ  ์ ์์ต๋๋ค.";

$GLOBALS['strP3PSettings']			= "P3P ๊ฐ์?ธ ๋ณดํธ ์ ์ฑ";
$GLOBALS['strUseP3P']				= "P3P ์ ์ฑ ์ฌ์ฉ";
$GLOBALS['strP3PCompactPolicy']			= "P3P Compact ์ ์ฑ";
$GLOBALS['strP3PPolicyLocation']		= "P3P ์ ์ฑ ์์น";



// Banner Settings
$GLOBALS['strBannerSettings']			= "๋ฐฐ๋ ์ค์ ";

$GLOBALS['strAllowedBannerTypes']		= "๋ฐฐ๋ ํ์?";
$GLOBALS['strTypeSqlAllow']			= "๋ก์ปฌ ๋ฐฐ๋(SQL) - DB ์ ์ฅ ๋ฐฉ์?";
$GLOBALS['strTypeWebAllow']			= "๋ก์ปฌ ๋ฐฐ๋(์น์๋ฒ) - ์น ์ ์ฅ ๋ฐฉ์?";
$GLOBALS['strTypeUrlAllow']			= "์ธ๋ถ ๋ฐฐ๋";
$GLOBALS['strTypeHtmlAllow']			= "HTML ๋ฐฐ๋";
$GLOBALS['strTypeTxtAllow']			= "ํ?์คํธ ๊ด๊ณ ";

$GLOBALS['strTypeWebSettings']			= "๋ก์ปฌ ๋ฐฐ๋(์น์๋ฒ) ์ค์ ";
$GLOBALS['strTypeWebMode']			= "์ ์ฅ ๋ฐฉ๋ฒ";
$GLOBALS['strTypeWebModeLocal']			= "๋ก์ปฌ ๋๋ ํฐ๋ฆฌ";
$GLOBALS['strTypeWebModeFtp']			= "์ธ๋ถ FTP ์๋ฒ";
$GLOBALS['strTypeWebDir']			= "๋ก์ปฌ ๋๋ ํฐ๋ฆฌ";
$GLOBALS['strTypeWebFtp']			= "FTP ๋ชจ๋ ์น ๋ฐฐ๋ ์๋ฒ";
$GLOBALS['strTypeWebUrl']			= "๋ฐฐ๋ URL";
$GLOBALS['strTypeFTPHost']			= "FTP ํธ์คํธ";
$GLOBALS['strTypeFTPDirectory']			= "ํธ์คํธ ๋๋ ํฐ๋ฆฌ";
$GLOBALS['strTypeFTPUsername']			= "๋ก๊ทธ์?ธID";
$GLOBALS['strTypeFTPPassword']			= "๋น๋ฐ๋ฒํธ";

$GLOBALS['strDefaultBanners']			= "๊ธฐ๋ณธ ๋ฐฐ๋";
$GLOBALS['strDefaultBannerUrl']			= "๊ธฐ๋ณธ ์?ด๋ฏธ์ง URL";
$GLOBALS['strDefaultBannerTarget']		= "๊ธฐ๋ณธ ๋์? URL";

$GLOBALS['strTypeHtmlSettings']			= "HTML ๋ฐฐ๋ ์ต์";
$GLOBALS['strTypeHtmlAuto']			= "ํ?ด๋ฆญ ํธ๋ํน์? ๊ฐ์  ์ํํ๊ธฐ ์ํด HTML ๋ฐฐ๋๋ฅผ ์?๋?์ผ๋ก ๋ณ๊ฒฝํฉ๋๋ค.";
$GLOBALS['strTypeHtmlPhp']			= "HTML ๋ฐฐ๋์์?์ PHP ์ฝ๋๋ฅผ ์คํํฉ๋๋ค.";



// Statistics Settings
$GLOBALS['strStatisticsSettings']		= "ํต๊ณ ์ค์ ";

$GLOBALS['strStatisticsFormat']			= "ํต๊ณ ํ์?";
$GLOBALS['strLogBeacon']			= "AdViews๋ฅผ ๊ธฐ๋ก?ํ๊ธฐ ์ํด ํฌ๋ช ์?ด๋ฏธ์ง๋ฅผ ์ฌ์ฉํฉ๋๋ค.";
$GLOBALS['strCompactStats']			= "๊ฐ๋จํ ํต๊ณ๋ฅผ ์ฌ์ฉํฉ๋๋ค.";
$GLOBALS['strLogAdviews']			= "AdViews ๋ก๊ทธ";
$GLOBALS['strBlockAdviews']			= "๋ณต์ ๋ก๊ทธ ๊ธ์ง(์ด)";
$GLOBALS['strLogAdclicks']			= "AdClicks ๋ก๊ทธ";
$GLOBALS['strBlockAdclicks']			= "๋ณต์ ๋ก๊ทธ ๊ธ์ง(์ด)";

$GLOBALS['strGeotargeting']			= "์ง์ญ ์ ๋ณด ์ค์ฌ(Geotargeting)";
$GLOBALS['strGeotrackingType']			= "์ง์ญ ์ ๋ณด ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ข๋ฅ";
$GLOBALS['strGeotrackingLocation'] 		= "์ง์ญ ์ ๋ณด ๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์์น";
$GLOBALS['strGeoLogStats']			= "๋ฐฉ๋ฌธ์? ๊ตญ์ ?์? ํต๊ณ์? ๊ธฐ๋ก?ํฉ๋๋ค.";
$GLOBALS['strGeoStoreCookie']		= "๋์ค์? ์ฐธ์กฐํ๊ธฐ ์ํด ์ฟ ํค์? ๊ฒฐ๊ณผ๋ฅผ ์ ์ฅํฉ๋๋ค.";

$GLOBALS['strEmailWarnings']			= "์?ด๋ฉ์?ผ ๊ฒฝ๊ณ ";
$GLOBALS['strAdminEmailHeaders']		= "์?ผ์?ผ ๊ด๊ณ  ๋ณด๊ณ ์์? ๋ฐ์ก์?์? ๋ํ ์ ๋ณด๋ฅผ ๋ฉ์?ผ ํค๋?์? ํ?ฌํจํฉ๋๋ค.";
$GLOBALS['strWarnLimit']			= "๊ฒฝ๊ณ ํ์ ์ ํ(Warn Limit)";
$GLOBALS['strWarnLimitErr']			= "๊ฒฝ๊ณ ํ์ ์ ํ(Warn Limit)์? ์?์๋ฅผ ์ฌ์ฉํ  ์ ์์ต๋๋ค.";
$GLOBALS['strWarnAdmin']			= "๊ด๋ฆฌ์?์?๊ฒ ๊ฒฝ๊ณ ๋ฅผ ์๋ฆฝ๋๋ค.";
$GLOBALS['strWarnClient']			= "๊ด๊ณ ์ฃผ์?๊ฒ ๊ฒฝ๊ณ ๋ฅผ ์๋ฆฝ๋๋ค.";
$GLOBALS['strQmailPatch']			= "qmail ํจ์น๋ฅผ ์ฌ์ฉํฉ๋๋ค.(qmail์? ์ฌ์ฉํ๋ ๊ฒฝ์ฐ)";

$GLOBALS['strRemoteHosts']			= "์?๊ฒฉ ํธ์คํธ";
$GLOBALS['strIgnoreHosts']			= "๋ฌด์ํ  ํธ์คํธ";
$GLOBALS['strReverseLookup']			= "DNS ์ญ์ฐธ์กฐ";
$GLOBALS['strProxyLookup']			= "ํ๋ก?์ ์ฐธ์กฐ";

$GLOBALS['strAutoCleanTables']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ ๋ฆฌ";
$GLOBALS['strAutoCleanStats']			= "ํต๊ณ ์ ๋ฆฌ";
$GLOBALS['strAutoCleanUserlog']			= "์ฌ์ฉ์? ๋ก๊ทธ ์ ๋ฆฌ";
$GLOBALS['strAutoCleanStatsWeeks']		= "๋ค์?๋ณด๋ค ์ค๋๋? ํต๊ณ ๋?ฎ์ด์ฐ๊ธฐ<br>(์ต์ 3์ฃผ)";
$GLOBALS['strAutoCleanUserlogWeeks']		= "๋ค์?๋ณด๋ค ์ค๋๋? ์ฌ์ฉ์? ๋ก๊ทธ ๋?ฎ์ด์ฐ๊ธฐ<br>(์ต์ 3์ฃผ)";
$GLOBALS['strAutoCleanErr']			= "์ต๋ ๋ณด์กด ๊ธฐ๊ฐ์? 3์ฃผ ์?ด์?์?ด์ด์ผํฉ๋๋ค.";
$GLOBALS['strAutoCleanVacuum']			= "VACUUM ANALYZE tables every night"; // only Pg


// Administrator settings
$GLOBALS['strAdministratorSettings']		= "๊ด๋ฆฌ์? ์ค์ ";

$GLOBALS['strLoginCredentials']			= "๋ก๊ทธ์?ธ ์ ๋ณด";
$GLOBALS['strAdminUsername']			= "๊ด๋ฆฌ์? ID";
$GLOBALS['strOldPassword']			= "๊ธฐ์กด ๋น๋ฐ๋ฒํธ";
$GLOBALS['strNewPassword']			= "์ ๋น๋ฐ๋ฒํธ";
$GLOBALS['strInvalidUsername']			= "์๋ชป๋? ID";
$GLOBALS['strInvalidPassword']			= "์๋ชป๋? ๋น๋ฐ๋ฒํธ";

$GLOBALS['strBasicInformation']			= "๊ธฐ๋ณธ ์ ๋ณด";
$GLOBALS['strAdminFullName']			= "๊ด๋ฆฌ์? ์ ์ฒด ์?ด๋ฆ";
$GLOBALS['strAdminEmail']			= "๊ด๋ฆฌ์? ์?ด๋ฉ์?ผ";
$GLOBALS['strCompanyName']			= "ํ์ฌ ์?ด๋ฆ";

$GLOBALS['strAdminCheckUpdates']		= "์๋?ฐ์?ดํธ ๊ฒ์";
$GLOBALS['strAdminCheckEveryLogin']		= "๋ก๊ธด๋ง๋ค";
$GLOBALS['strAdminCheckDaily']			= "์?ผ์?ผ";
$GLOBALS['strAdminCheckWeekly']			= "์ฃผ๊ฐ";
$GLOBALS['strAdminCheckMonthly']		= "์๊ฐ";
$GLOBALS['strAdminCheckNever']			= "์ํจ";

$GLOBALS['strAdminNovice']			= "์์ ์? ์ํด ๊ด๋ฆฌ์?๊ฐ ์ญ์ ํ๊ธฐ ์ ์? ํ์?ธํฉ๋๋ค.";
$GLOBALS['strUserlogEmail']			= "๋ชจ๋  ์ธ๋ถ ๋ฐ์ก ์?ด๋ฉ์?ผ ๋ฉ์์ง๋ฅผ ๊ธฐ๋ก?ํฉ๋๋ค.";
$GLOBALS['strUserlogPriority']			= "๋งค์๊ฐ๋ง๋ค ์ฐ์ ์์ ๊ณ์ฐ์? ๊ธฐ๋ก?ํฉ๋๋ค.";
$GLOBALS['strUserlogAutoClean']			= "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์?๋? ์ ๋ฆฌ๋ฅผ ๊ธฐ๋ก?ํฉ๋๋ค.";


// User interface settings
$GLOBALS['strGuiSettings']			= "์ฌ์ฉ์? ์?ธํฐํ์?ด์ค ์ค์ ";

$GLOBALS['strGeneralSettings']			= "์?ผ๋ฐ ์ค์ ";
$GLOBALS['strAppName']				= "์?์ฉ ํ๋ก๊ทธ๋จ ์?ด๋ฆ";
$GLOBALS['strMyHeader']				= "๋ด ๋จธ๋ฆฌ๊ธ";
$GLOBALS['strMyFooter']				= "๋ด ๋ฐ๋ฅ๊ธ";
$GLOBALS['strGzipContentCompression']		= "์ปจํ?ํธ GZIP ์์ถ ์ฌ์ฉ";

$GLOBALS['strClientInterface']			= "๊ด๊ณ ์ฃผ ์?ธํฐํ์?ด์ค";
$GLOBALS['strClientWelcomeEnabled']		= "๊ด๊ณ ์ฃผ ํ์? ๋ฉ์์ง๋ฅผ ์ฌ์ฉํฉ๋๋ค.";
$GLOBALS['strClientWelcomeText']		= "ํ์? ๋ฉ์์ง<br>(HTML ํ๊ทธ ๊ฐ๋ฅ)";



// Interface defaults
$GLOBALS['strInterfaceDefaults']		= "๊ธฐ๋ณธ ์?ธํฐํ์?ด์ค ์ค์ ";

$GLOBALS['strInventory']			= "๋ชฉ๋ก?";
$GLOBALS['strShowCampaignInfo']			= "<i>์บ ํ์?ธ ๋ชฉ๋ก?</i> ํ์?ด์ง์? ์บ ํ์?ธ ์ ๋ณด๋ฅผ ์?์ธํ ๋ณด์ฌ์ค?๋๋ค.";
$GLOBALS['strShowBannerInfo']			= "<i>๋ฐฐ๋ ๋ชฉ๋ก?</i> ํ์?ด์ง์? ๋ฐฐ๋ ์ ๋ณด๋ฅผ ์?์ธํ ๋ณด์ฌ์ค?๋๋ค.";
$GLOBALS['strShowCampaignPreview']		= "<i>๋ฐฐ๋ ๋ชฉ๋ก?</i> ํ์?ด์ง์? ๋ฐฐ๋์? ๋ฏธ๋ฆฌ๋ณด๊ธฐ๋ฅผ ๋ชจ๋? ํ์ํฉ๋๋ค.";
$GLOBALS['strShowBannerHTML']			= "HTML ์ฝ๋ ๋์ ์? ์ค์  ๋ฐฐ๋๋ฅผ ํ์ํฉ๋๋ค.";
$GLOBALS['strShowBannerPreview']		= "๋ฐฐ๋ ์ฒ๋ฆฌ ํ๋ฉด์?์ ํ์?ด์ง ์?๋จ์? ๋ฐฐ๋ ๋ฏธ๋ฆฌ๋ณด๊ธฐ๋ฅผ ํ์ํฉ๋๋ค.";
$GLOBALS['strHideInactive']			= "์ฌ์ฉํ์ง ์๋ ํญ๋ชฉ์? ๋ชจ๋  ๋ชฉ๋ก? ํ์?ด์ง์?์ ์จ๊น?๋๋ค.";
$GLOBALS['strGUIShowMatchingBanners']		= "<i>์ฐ๊ฒฐ๋? ๋ฐฐ๋</i> ํ์?ด์ง์? ํด๋น ๋ฐฐ๋๋ฅผ ํ์ํฉ๋๋ค.";
$GLOBALS['strGUIShowParentCampaigns']		= "<i>์ฐ๊ฒฐ๋? ๋ฐฐ๋</i> ํ์?ด์ง์? ํด๋นํ๋ ์?์ ์ผ?ํ์?ธ์? ํ์ํฉ๋๋ค.";
$GLOBALS['strGUILinkCompactLimit']		= "<i>ํญ๋ชฉ์?ด ๋ง์? ๊ฒฝ์ฐ์?๋ <i>์ฐ๊ฒฐ๋? ๋ฐฐ๋</i> ํ์?ด์ง์? ์ฐ๊ฒฐ๋? ์บ ํ์?ธ์?ด ์๋ ๋ฐฐ๋๋ ์จ๊น?๋๋ค.";

$GLOBALS['strStatisticsDefaults'] 		= "ํต๊ณ";
$GLOBALS['strBeginOfWeek']			= "ํ ์ฃผ์? ์์์?ผ";
$GLOBALS['strPercentageDecimals']		= "๋ฐฑ๋ถ์จ ์์์ ?";

$GLOBALS['strWeightDefaults']			= "๊ฐ์ค์น ๊ธฐ๋ณธ์ค์ ";
$GLOBALS['strDefaultBannerWeight']		= "๋ฐฐ๋ ๊ฐ์ค์น ๊ธฐ๋ณธ๊ฐ";
$GLOBALS['strDefaultCampaignWeight']		= "์บ ํ์?ธ ๊ฐ์ค์น ๊ธฐ๋ณธ๊ฐ";
$GLOBALS['strDefaultBannerWErr']		= "๋ฐฐ๋ ๊ฐ์ค์น์? ๊ธฐ๋ณธ๊ฐ์? ์ ์๋ฅผ ์๋ ฅํด์ผํฉ๋๋ค.";
$GLOBALS['strDefaultCampaignWErr']		= "์บ ํ์?ธ ๊ฐ์ค์น์? ๊ธฐ๋ณธ๊ฐ์? ์ ์๋ฅผ ์๋ ฅํด์ผํฉ๋๋ค.";



// Not used at the moment
$GLOBALS['strTableBorderColor']			= "ํ์?ด๋ธ ํ๋?๋ฆฌ ์์?";
$GLOBALS['strTableBackColor']			= "ํ์?ด๋ธ ๋ฐฐ๊ฒฝ ์์?";
$GLOBALS['strTableBackColorAlt']		= "ํ์?ด๋ธ ๋ฐฐ๊ฒฝ ์์?(Alternative)";
$GLOBALS['strMainBackColor']			= "์ฃผ ๋ฐฐ๊ฒฝ ์์?";
$GLOBALS['strOverrideGD']			= "GD ์?ด๋ฏธ์ง ํ?ฌ๋งท์? ๋ฌด์ํฉ๋๋ค.";
$GLOBALS['strTimeZone']				= "์๊ฐ ์?์ญ";



// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strDbSetupTitle'] = "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์ค์ ";
$GLOBALS['strDeliveryUrlPrefix'] = "์ ๋ฌ์ ์ง ์์ง";
$GLOBALS['strDeliveryUrlPrefixSSL'] = "์ ๋ฌ์ ์ง ์์ง";
$GLOBALS['strDbType'] = "๋?ฐ์?ดํฐ๋ฒ ์?ด์ค ์?ด๋ฆ";
$GLOBALS['strDeliveryPath'] = "์ ๋ฌ์ ์ง ์บ?์";
$GLOBALS['strDeliverySslPath'] = "์ ๋ฌ์ ์ง ์บ?์";
$GLOBALS['strGeotargetingSettings'] = "์ง์ญ ์ ๋ณด ์ค์ฌ(Geotargeting)";
$GLOBALS['strWarnAgency'] = "๊ด๊ณ ์ฃผ์?๊ฒ ๊ฒฝ๊ณ ๋ฅผ ์๋ฆฝ๋๋ค.";
$GLOBALS['strEnableQmailPatch'] = "qmail ํจ์น๋ฅผ ์ฌ์ฉํฉ๋๋ค.(qmail์? ์ฌ์ฉํ๋ ๊ฒฝ์ฐ)";
$GLOBALS['strEmailSettings'] = "์ค์ ";
?>