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
$Id: template.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/

/**
 *
 * This is autogenerated merged delivery file which contains all files
 * from delivery merged into one output file.
 *
 * !!!Warning!!!
 *
 * Do not edit this file. If you need to do any changes to any delivery PHP file
 * checkout sourcecode from the svn repository, do a necessary changes inside
 * "delivery_dev" folder and regenerate delivery files using command:
 * # php rebuild.php
 *
 * For more information on ant generator or if you want to check why we do this
 * check out the documentation wiki page:
 * https://developer.openx.org/wiki/display/COMM/Using+Ant#UsingAnt-Generatingoptimizeddelivery
 *
 */

if (empty($_GET['script'])) {
exit(1);
}
include_once '../../init-delivery.php';
$script = str_replace("\0", '', $_GET['script']);
$aPluginId = explode(':', $script);
$scriptFileName = MAX_PATH . rtrim($conf['pluginPaths']['plugins'], '/') . '/' . implode('/', $aPluginId) . '.delivery.php';
if (stristr($scriptFileName, '../') || stristr($scriptFileName, '..\\') || !is_readable($scriptFileName) || !is_file($scriptFileName)) {
if (empty($conf['debug']['production'])) {
echo "Unable to find delivery script ({$scriptFileName}) for specified plugin-component-identifier: {$script}";
}
exit(1);
}
include $scriptFileName;
