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
$GLOBALS['strChooseSection']			= "閫夋嫨绔犺妭";


// Priority
$GLOBALS['strRecalculatePriority']		= "閲?鏂拌绠椾紭鍏堢骇";
$GLOBALS['strHighPriorityCampaigns']		= "高优先权项目";
$GLOBALS['strAdViewsAssigned']			= "分配的广告访问数";
$GLOBALS['strLowPriorityCampaigns']		= "低优先权项目";
$GLOBALS['strPredictedAdViews']			= "预定的广告访问数";
$GLOBALS['strPriorityDaysRunning']		= MAX_PRODUCT_NAME."可以在现在有{days}天数据的基础上预估每天的优先权.";
$GLOBALS['strPriorityBasedLastWeek']		= "在上周和本周数据基础上的预估值.";
$GLOBALS['strPriorityBasedLastDays']		= "T在前几天数据的基础上的预估值.";
$GLOBALS['strPriorityBasedYesterday']		= "在昨天数据的基础上的预估值";
$GLOBALS['strPriorityNoData']			= "现在没有足够的数据来精确估算此广告服务器今天点击数的预计值。所以只在实时数据的基础上分配优先权.";
$GLOBALS['strPriorityEnoughAdViews']		= "有足够的访问数来完全满足预定的所有高优先权的方案.";
$GLOBALS['strPriorityNotEnoughAdViews']		= "还不知道是否有足够的推播数来完全满足预定的所有高优先权的方案,所以所有低优先权的方案已经暂时停用了.";


// Banner cache
$GLOBALS['strRebuildBannerCache']		= "重建广告缓存区";
$GLOBALS['strBannerCacheExplaination']		= "骞垮憡鏁版?簱缂撳瓨鐨勪綔鐢ㄦ槸鍔犻�熷箍鍛婄殑鎶曟斁<br />\n璇ョ紦瀛橀渶瑕?鍦ㄤ互涓嬫儏鍐典笅鏇存柊锛歕n    <ul>\n        <li>鎮ㄥ?囩骇浜哋penX</li>\n        <li>鎮ㄥ皢OpenX杩?绉诲埌涓�涓柊鐨勬�?鍔″櫒涓�</li>\n    </ul>";


// Cache
$GLOBALS['strCache']				= "�?戝竷缂撳瓨";
$GLOBALS['strAge']				= "骞撮緞";
$GLOBALS['strRebuildDeliveryCache']		= "閲?鏋勬暟�?簱骞垮憡缂撳瓨";
$GLOBALS['strDeliveryCacheExplaination']	= "发送缓存区可以提高广告的发放速度.发送缓存区包含连接到此版位的所有广告的一个副本,当广告实际发放给用户的时候减少了一些数据库的查询.此缓存区通常在一个版位或者版位的一个广告改动的时候重建,它可能会过期.所以缓存区会每个小时自动重建一次,但您也可以手工重建.";
$GLOBALS['strDeliveryCacheSharedMem']		= "鍏变韩鍐呭瓨鐩�?姝ｈ�?戝竷缂撳瓨�?犵敤";
$GLOBALS['strDeliveryCacheDatabase']		= "鏁版?鍦ㄥ瓨鍌ㄥ?戝竷缂撳瓨";
$GLOBALS['strDeliveryCacheFiles']		= "�?戝竷缂撳瓨姝ｅ湪瀛樺偍鍒颁綘鏈?鍔″櫒涓婄殑澶氫釜鏂囦欢";


// Storage
$GLOBALS['strStorage']				= "瀛樺偍";
$GLOBALS['strMoveToDirectory']			= "灏嗗浘鐗囦粠鏁版?簱涓Щ鍔ㄥ埌鐩綍涓�";
$GLOBALS['strStorageExplaination']		= "鍥剧墖鏂囦欢�?瓨鍌ㄥ湪鏁版?簱鎴栨枃浠剁郴缁熶腑銆傚瓨鍌ㄥ湪鏂囦欢绯荤粺涓皢姣斿瓨鍌ㄥ湪鏁版?簱涓晥鐜囨洿楂樸��";


// Storage
$GLOBALS['strStatisticsExplaination']		= "鎮ㄥ凡缁?�?敤浜�<i>绱х缉缁熻</i>, 浣嗘槸鎮ㄧ殑鎶ヨ〃杩樻槸璇︾粏鏍煎�?, 鎮ㄦ槸�?︽効鎰?鎶婄幇鏈夌殑璇︾粏鏍煎�?杞?负绱х缉鏍煎�??";


// Product Updates
$GLOBALS['strSearchingUpdates']			= "鏌ユ壘鏇存柊锛岃绋?鍊欌�︹��";
$GLOBALS['strAvailableUpdates']			= "�??渚涚殑鏇存柊";
$GLOBALS['strDownloadZip']			= "涓嬭浇锛�.zip锛�";
$GLOBALS['strDownloadGZip']			= "涓嬭浇锛�.tar.gz锛�";

$GLOBALS['strUpdateAlert']			= MAX_PRODUCT_NAME."有新的版本可用\\n\\n您想知道更多关于此次升级的消息吗?";
$GLOBALS['strUpdateAlertSecurity']		= MAX_PRODUCT_NAME."有新的版本可用\\n\\n强烈推荐您尽快升级,\\n因为此次新版本包含了一个或多个安全补丁!";

$GLOBALS['strUpdateServerDown']			= "鐢变簬涓?鏄庡師鍥狅紝瀵艰嚧鏃犳硶鑾峰?栨洿鏂颁俊�?��<br>璇风�?�?庡�?璇曚竴涓嬨��";

$GLOBALS['strNoNewVersionAvailable']		= "鎮�". MAX_PRODUCT_NAME ."鐨勭増鏈凡鏄渶鏂扮殑銆�";

$GLOBALS['strNewVersionAvailable']		= " <b>". MAX_PRODUCT_NAME ."鐨勬柊鐗堟湰宸茬�?�?戝竷銆�</b><br /> 鐢变簬淇敼涓�浜涘凡鐭ョ殑闂�?婂鍔犱簡涓�浜涙柊鍔熻兘銆傛墍浠ュ缓璁偍瀹夎杩欎釜鏇存柊銆傚鏋滄偍甯屾湜杩涗竴姝ヤ簡瑙ｇ浉鍏崇粏蹇冿紝璇峰?傞槄鏂囦欢涓殑鐩稿叧鏂囨。銆俓n";

$GLOBALS['strSecurityUpdate']			= "<b>鐢变簬娑夊?婅嫢骞蹭釜瀹夊叏鏇存柊锛屾墍浠ュ己鐑堝缓璁偍�?囩骇銆�</b> \n鎮ㄧ幇鍦ㄧ殑". MAX_PRODUCT_NAME ."鐗堟湰锛屽?兘鍥犱负鏀诲嚮鑰屽?樺緱涓?�??犮�傚鏋滃笇鏈涗簡瑙ｈ繘涓�姝ョ殑淇℃?紝璇峰?傞槄鏂囦欢涓殑鐩稿叧鏂囨。銆�";

$GLOBALS['strNotAbleToCheck']			= " <b>鐢变簬鎮ㄦ�?鍔″櫒涓婃病鏈塜ML寮曠敵锛屾墍浠�". MAX_PRODUCT_NAME ."鏃犳硶鏌ユ壘鏄?︽湁鏂扮殑鏇存柊�??渚涖��</b>";

$GLOBALS['strForUpdatesLookOnWebsite']		= "濡傛灉鎮ㄥ笇鏈涚煡�?撴槸�?︽湁鏂扮殑鐗堟湰�??渚涳紝璇锋煡闃呮垜浠殑缃戠珯銆�";

$GLOBALS['strClickToVisitWebsite']		= "鐐瑰嚮璁块棶瀹樻柟缃戠珯";
$GLOBALS['strCurrentlyUsing']			= "浣犳鍦ㄤ娇鐢ㄧ殑";
$GLOBALS['strRunningOn']			= "杩?琛岀殑";
$GLOBALS['strAndPlain']				= "涓�";


// Stats conversion
$GLOBALS['strConverting']			= "转换中";
$GLOBALS['strConvertingStats']			= "统计数据转换中...";
$GLOBALS['strConvertStats']			= "转换统计数据";
$GLOBALS['strConvertAdViews']			= "访问数已经转换完毕,";
$GLOBALS['strConvertAdClicks']			= "点击数已经转换完毕...";
$GLOBALS['strConvertNothing']			= "没有数据可以转换...";
$GLOBALS['strConvertFinished']			= "完毕...";

$GLOBALS['strConvertExplaination']		= "您现在使用简洁格式来保存报表,但是还有一些报表是详细格式.<br />详细格式的报表没有转换成简洁格式将不能在页面上直接使用.<br />在转换您的报表之前,保存数据库的一个备份!<br />是否确认要把详细格式的报表转换成新的简洁格式?<br />";

$GLOBALS['strConvertingExplaination']		= "所有剩余的详细格式的报表正在转换成简洁格式<br />根据详细格式的数目而需要时间不同，可能需要几分钟。在浏览其他页面之前一定要等到转换完成。<br />下面您将看到数据库修改的记录.<br />";

$GLOBALS['strConvertFinishedExplaination']  	= "剩余的详细格式的报表已经转换成功。数据现在要再次使用，下面您将看到数据库修改的记录<br />";




// Note: new translatiosn not found in original lang files but found in CSV
$GLOBALS['strCheckBannerCache'] = "妫�鏌ュ箍鍛婄紦瀛�";
$GLOBALS['strBannerCacheErrorsFound'] = "缁?鏌ワ紝鏁版?簱骞垮憡缂撳瓨�?戠幇閿欒銆傚湪鎵嬪伐淇杩欎簺閿欒涔嬪�?锛岃繖浜涘箍鍛婂皢鏃犳硶姝ｅ父杩?琛屻��";
$GLOBALS['strBannerCacheOK'] = "鏈?戠幇閿欒锛屾偍鐨勬暟�?簱骞垮憡缂撳瓨宸叉槸鏈�鏂扮殑";
$GLOBALS['strBannerCacheDifferencesFound'] = "缁?鏌ワ紝鏁版?簱骞垮憡缂撳瓨涓?鏄渶鏂扮殑锛岄渶瑕?閲?寤恒�傜偣鍑昏繖閲岃嚜鍔ㄦ洿鏂扮紦瀛樸��";
$GLOBALS['strBannerCacheRebuildButton'] = "閲?鏋�";
$GLOBALS['strUpdateAlert'] = "". MAX_PRODUCT_NAME ." 鏂扮増鏈凡�?戝竷銆�                 \n\n鎮ㄥ笇鏈涗簡瑙ｆ洿澶氬叧浜庢柊鐗堟湰鐨勪俊�??楋紵?";
$GLOBALS['strUpdateAlertSecurity'] = "". MAX_PRODUCT_NAME ." 鏂扮増鏈凡�?戝竷銆�                 \n\n鐢变簬�??渚涗簡寰堝瀹夊叏鏂归?㈢殑淇敼? 鎵�浠ュ己鐑堝缓璁偍鏇存柊鍒版柊鐗堟湰銆�";
$GLOBALS['strBannerCacheFixed'] = "鎴?鍔熷畬鎴?骞垮憡鏁版?簱缂撳瓨閲?鏋�, 鏁版?簱缂撳瓨宸茬�?鏇存柊.";


// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strEncoding'] = "缂栫�?";
$GLOBALS['strEncodingExplaination'] = "". MAX_PRODUCT_NAME ." 鍦ㄦ暟�?簱涓娇鐢║TF-8鏍煎�?淇?瀛樺?勭�?鏁版?��<br />鍦ㄤ换浣曞?兘鎯呭喌涓嬶紝鎮ㄧ殑鏁版?細琚嚜鍔ㄨ浆�?负杩欑�?缂栫�?銆�<br />濡傛灉�?囩骇�?庢偍�?戠幇閿欎贡鐨勫瓧绗︼紝骞朵笖鎮ㄧ煡�?撴墍鐢ㄧ殑缂栫�?锛屾偍�?互浣跨敤杩欎釜宸ュ叿�?ュ皢鏁版?浆�?负UTF-8鏍煎�?銆�";
$GLOBALS['strEncodingConvertFrom'] = "浠庢缂栫�?杞?細";
$GLOBALS['strEncodingConvert'] = "杞?�";
$GLOBALS['strEncodingConvertTest'] = "杞?㈡祴璇�";
$GLOBALS['strConvertThese'] = "濡傛偍缁х画锛屽垯涓嬪垪鏁版?細琚慨鏀�";
$GLOBALS['strAppendCodes'] = "闄勫姞浠ｇ�?";
$GLOBALS['strScheduledMaintenanceHasntRun'] = "鑷姩缁存姢绋嬪�?鍦ㄤ笂涓�?鏃舵病鏈夎鎵ц锛岃妫�鏌ヤ綘鐨勮缃��";
$GLOBALS['strAutoMantenaceEnabledAndHasntRun'] = "鑷姩缁存姢绋嬪�?宸茬�?�?姩锛屼絾鏄粬娌℃湁琚Е�?戯紝鑷姩绋嬪�?琚Е�?戝綋". MAX_PRODUCT_NAME ."�?戝竷骞垮憡鏃讹紝涓烘�ц兘鑰冭檻锛屼綘鏈�濂借缃�<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>鑷姩缁存姢</a>.";
$GLOBALS['strAutoMantenaceDisabledAndHasntRun'] = "鑷姩缁存姢绋嬪�?宸茬�?琚�?鐢紝鎵�浠ュ綋". MAX_PRODUCT_NAME ."�?戝竷骞垮憡鏃讹紝鑷姩缁存姢绋嬪�?涓?浼氳骞垮憡鎵�瑙﹀?戯紝涓轰簡鎬ц兘鑰冭檻锛屼綘蹇呴渶璁剧疆<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>璁″垝缁存姢</a>銆傚綋鐒讹紝濡傛灉浣犱�?璁剧疆<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>璁″垝缁存姢</a>鐨勮�?锛屼綘<i>蹇呴渶</i><a href='account-settings-maintenance.php'>寮��?嚜鍔ㄧ淮鎶ょ▼搴?</a>浠ョ‘淇? ". MAX_PRODUCT_NAME ." 杩?琛屾甯�. ";
$GLOBALS['strAutoMantenaceEnabledAndRunning'] = "鑷姩缁存姢绋嬪�?宸茬�?�?姩锛屼絾鏄粬娌℃湁琚Е�?戯紝鑷姩绋嬪�?琚Е�?戝綋". MAX_PRODUCT_NAME ."�?戝竷骞垮憡鏃讹紝涓烘�ц兘鑰冭檻锛屼綘鏈�濂借缃�<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>鑷姩缁存姢</a>.";
$GLOBALS['strAutoMantenaceDisabledAndRunning'] = "鑷姩缁存姢绋嬪�?宸茬�?琚�?鐢ㄣ�備负淇?璇?". MAX_PRODUCT_NAME ."鑳藉姝ｅ父杩?琛岋紝璇疯瀹�<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>璁″垝缁存姢浠诲姟</a>鎴�<a href='account-settings-maintenance.php'>閲?鏂板紑�?嚜鍔ㄧ淮鎶ょ▼搴?</a>銆備负鎬ц兘鑰冭檻锛屼綘鏈�濂借缃�<a href='". OX_PRODUCT_DOCSURL ."/maintenance' target='_blank'>鑷姩缁存姢</a>.";
$GLOBALS['strScheduledMantenaceRunning'] = "璁″垝缁存姢杩?琛屾甯�";
$GLOBALS['strAutomaticMaintenanceHasRun'] = "鑷姩缁存姢绋嬪�?杩?琛屾甯�";
$GLOBALS['strAutoMantenaceEnabled'] = "鑷姩缁存姢绋嬪�?浠荤劧寮��?�備负鎬ц兘鑰冭檻锛屼綘鏈�濂�<a href='account-settings-maintenance.php'>鍏抽棴鑷姩缁存姢</a>.";
$GLOBALS['strAutoMaintenanceDisabled'] = "鑷姩缁存姢绋嬪�?宸茶绂?鐢�";
$GLOBALS['strAutoMaintenanceEnabled'] = "鑷姩缁存姢绋嬪�?宸茬�?寮��?�備负鎬ц兘鑰冭檻锛屼綘鏈�濂�<a href='account-settings-maintenance.php'>鍏抽棴鑷姩缁存姢</a>.";
$GLOBALS['strCheckACLs'] = "妫�鏌CL";
$GLOBALS['strScheduledMaintenance'] = "璁″垝缁存姢浠诲姟浼间箮姝ｅ父杩?琛屼腑銆�";
$GLOBALS['strAutoMaintenanceEnabledNotTriggered'] = "鑷姩缁存姢绋嬪�?宸茬�?寮��?紝浣嗘槸浠栨病鏈夎瑙﹀?戙�傝娉ㄦ�?鑷姩缁存姢绋嬪�?�?湁鍦ㄥ箍鍛婅璁块棶鏃舵�?浼氳瑙﹀?戙��";
$GLOBALS['strAutoMaintenanceBestPerformance'] = "涓烘�ц兘鑰冭檻锛岃璁剧疆<a href='". OX_PRODUCT_DOCSURL ."/maintenance.html' target='_blank'>璁″垝缁存姢浠诲姟</a>";
$GLOBALS['strAutoMaintenanceEnabledWilltTrigger'] = "鑷姩缁存姢绋嬪�?宸茬�?�?敤锛屽皢浼氭�?涓�?鏃惰繘琛屼竴娆＄淮鎶ゃ��";
$GLOBALS['strAutoMaintenanceDisabledMaintenanceRan'] = "鑷姩缁存姢绋嬪�?宸茬�?琚�?鐢紝浣嗘槸涓�涓淮鎶や换鍔℃鍦ㄨ�?琛屼腑銆備负纭畾". MAX_PRODUCT_NAME ."杩?琛屾甯镐綘蹇呴』璁剧疆<a href='http://". OX_PRODUCT_DOCSURL ."/maintenance.html' target='_blank'>璁″垝缁存姢浠诲姟</a>鎴�<a href='settings-admin.php'>寮��?嚜鍔ㄧ淮鎶ょ▼搴?</a>.";
$GLOBALS['strAutoMaintenanceDisabledNotTriggered'] = "鑷姩缁存姢绋嬪�?宸茬�?琚�?鐢紝鎵�浠ュ綋". MAX_PRODUCT_NAME ."�?戝竷骞垮憡鏃讹紝缁存姢绋嬪�?灏嗕�?浼氳瑙﹀?戯紝濡傛灉浣犳病鏈夎鍒掑幓杩?琛�<a href='http://". OX_PRODUCT_DOCSURL ."/maintenance.html' target='_blank'>璁″垝缁存姢绋嬪�?</a>,浣犲繀椤� <a href='settings-admin.php'>寮��?嚜鍔ㄧ淮鎶ょ▼搴?</a>浠ヤ�?璇?". MAX_PRODUCT_NAME ." 姝ｅ父杩?琛屻��";
$GLOBALS['strAllBannerChannelCompiled'] = "鎵�鏈夌殑骞垮憡/棰戦?撻�?鍒跺凡缁?琚�?鏂拌缃��";
$GLOBALS['strBannerChannelResult'] = "骞垮憡/棰戦?撻�?鍒剁粨鏋�";
$GLOBALS['strChannelCompiledLimitationsValid'] = "鎵�鏈夌殑棰戦?撻�?鍒惰缃甯�";
$GLOBALS['strBannerCompiledLimitationsValid'] = "鎵�鏈夌殑骞垮憡闄?鍒惰缃甯�";
$GLOBALS['strErrorsFound'] = "鎵惧埌閿欒";
$GLOBALS['strRepairCompiledLimitations'] = "鏈変簺闄?鍒惰缃湁璇紝浣犲?互鐐瑰嚮鎸夐挳浠ヤ慨澶?杩欎簺闂<br />";
$GLOBALS['strRecompile'] = "閲?绠�";
$GLOBALS['strAppendCodesDesc'] = "鍦ㄦ�?浜涚幆澧冧笅骞垮憡寮曟搸鍦ㄥ?戝竷闄勫睘浠ｇ�?璺熻釜淇℃?椂浼氫�?涓�鑷达紝鏈変互涓嬮摼鎺ョ‘璁ら檮灞炰唬鐮?銆�";
$GLOBALS['strCheckAppendCodes'] = "妫�鏌ラ檮灞炰唬鐮?";
$GLOBALS['strAppendCodesRecompiled'] = "鎵�鏈夐檮灞炰唬鐮?宸茬�?琚�?璁�";
$GLOBALS['strAppendCodesResult'] = "闄勫睘浠ｇ�?閲?璁剧粨鏋�";
$GLOBALS['strAppendCodesValid'] = "鎵�鏈夌殑璺熻釜闄勫睘浠ｇ�?姝ｅ父";
$GLOBALS['strRepairAppenedCodes'] = "鏈変簺闄勫睘浠ｇ�?鏈夎锛屼綘�?互鐐瑰嚮鎸夐挳浠ヤ慨澶?杩欎簺闂";
$GLOBALS['strScheduledMaintenanceNotRun'] = "璁″垝缁存姢绋嬪�?鍦ㄤ笂涓�?鏃朵腑骞舵病鏈夎�?琛岋紝杩欐�?鍛崇?�浣犲?兘娌℃湁璁剧疆姝ｇ‘";
$GLOBALS['strDeliveryEngineDisagreeNotice'] = "鍦ㄦ�?浜涚幆澧冧笅骞垮憡�?戝竷寮曟搸浼氫�?�?屾�?骞垮憡�?″拰棰戦?撶殑ACL锛岃鐐瑰嚮涓嬮?㈢殑閾炬帴�?ラ獙璇?鏁版?簱涓殑ACL";
$GLOBALS['strServerCommunicationError'] = "<b>涓庢洿鏂版�?鍔″櫒鐨勯�氫俊瓒呮椂锛屽洜姝�".MAX_PRODUCT_NAME." 鏃犳硶妫�鏌ユ鏃舵槸�?︽湁�?敤鐨勬柊鐗堟湰銆傝绋?�?庨�?璇曘��</b>";
?>