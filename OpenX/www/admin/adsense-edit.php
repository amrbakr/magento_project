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
$Id: affiliate-edit.php 12839 2007-11-27 16:32:39Z bernard.lange@openads.org $
*/

// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAX_PATH . '/www/admin/config.php';

// Register input variables
// TODO: This variable has been added to demonstrate that clicking on
// links from error messages could bring the already entered e-mail address
// to the new form. Feel free to keep it or remove, depending on the
// implementation strategy.
phpAds_registerGlobalUnslashed ('email');



/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageHeader("4.1.3.4.7.3");
// TODO: The path here should probably start with the advertiser's data
// Not sure if we need to include the campaign and banner in the path though.
// We'll need to clarify this with the Product team.
echo "<img src='" . OX::assetPath() . "/images/icon-affiliate.gif' align='absmiddle'>&nbsp;<b>Edit AdSense Account</b><br /><br /><br />";
phpAds_ShowSections(array("4.1.3.4.7.3"));


/*-------------------------------------------------------*/
/* Main code                                             */
/*-------------------------------------------------------*/

require_once MAX_PATH . '/lib/OA/Admin/Template.php';

$oTpl = new OA_Admin_Template('adsense-edit.html');

$oTpl->assign('fields', array(
    array(
        'title'     => 'AdSense Account Information',
        'fields'    => array(
            array(
                'name'      => 'name',
                'label'     => 'Name',
                'value'     => ''
            ),
            array(
                'name'      => 'email',
                'label'     => 'Email',
                'value'     => $email
            ),
            array(
                'name'      => 'phone5digits',
                'label'     => 'Last 5 digits of phone number',
                'value'     => ''
            ),
            array(
                'name'      => 'postalcode',
                'label'     => 'Postal Code',
                'value'     => ''
            )
        )
    )
));

//var_dump($oTpl);
//die();
$oTpl->display();

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

phpAds_PageFooter();

?>
