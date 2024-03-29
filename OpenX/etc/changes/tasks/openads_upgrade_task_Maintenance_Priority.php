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
$Id: openads_upgrade_task_Maintenance_Priority.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/

//$oMessages initialized by runner OA_Upgrade::runPostUpgradeTask
if (!class_exists('OA_Maintenance_Priority'))
{
    require_once MAX_PATH . '/lib/OA/Maintenance/Priority.php';
}

$oMessages->logInfo('Starting Maintenance Prioritisation');
$upgradeTaskResult  = OA_Maintenance_Priority::run();
if (PEAR::isError($upgradeTaskResult)) {
    $oMessages->logError($upgradeTaskResult->getCode().': '.$upgradeTaskResult->getMessage());
}
$oMessages->logInfo('Maintenance Prioritisation: '.($upgradeTaskResult ? 'Complete' : 'Failed'));
