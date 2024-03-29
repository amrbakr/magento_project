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
$Id: account-user-email.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/

// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAX_PATH . '/lib/OA/Admin/Option.php';
require_once MAX_PATH . '/lib/OA/Admin/UI/UserAccess.php';

require_once MAX_PATH . '/lib/max/Admin/Languages.php';
require_once MAX_PATH . '/lib/max/Plugin/Translation.php';
require_once MAX_PATH . '/www/admin/config.php';


// Security check
OA_Permission::enforceAccount(OA_ACCOUNT_ADMIN, OA_ACCOUNT_MANAGER, OA_ACCOUNT_ADVERTISER, OA_ACCOUNT_TRAFFICKER);

// Create a new option object for displaying the setting's page's HTML form
$oOptions = new OA_Admin_Option('user');

// Prepare an array for storing error messages
$aErrormessage = array();

// If the settings page is a submission, deal with the form data
if (isset($_POST['submitok']) && $_POST['submitok'] == 'true') {
    // Register input variables
    phpAds_registerGlobalUnslashed(
        'pw',
        'email_address'
    );

    // Get the DB_DataObject for the current user
    $doUsers = OA_Dal::factoryDO('users');
    $doUsers->get(OA_Permission::getUserId());

    // Set defaults
    $changeEmail = isset($email_address);

    // Get the current authentication plugin instance
    $oPlugin = OA_Auth::staticGetAuthPlugin();

    // Check password
    if (!isset($pw) || !$oPlugin->checkPassword(OA_Permission::getUsername(), $pw)) {
        $aErrormessage[0][] = $GLOBALS['strPasswordWrong'];
    }
    if (isset($pw) && strlen($pw)) {
        if (!strlen($pw)  || strstr("\\", $pw)) {
            $aErrormessage[0][] = $GLOBALS['strInvalidPassword'];
        }
    }
    if (!count($aErrormessage) && $changeEmail) {
        $result = $oPlugin->changeEmail($doUsers, $email_address, $pw);
        if (PEAR::isError($result)) {
            $aErrormessage[0][] = $result->getMessage();
        }
    }
    if (!count($aErrormessage)) {
        if (($doUsers->update() === false)) {
            // Unable to update the preferences
            $aErrormessage[0][] = $strUnableToWritePrefs;
        }
        else {
        	//Add the new username to the session
            $oUser = &OA_Permission::getCurrentUser();
            $oUser->aUser['email_address'] = $email_address;
            phpAds_SessionDataStore();

            $translation = new OX_Translation ();
            $translated_message = $translation->translate($GLOBALS['strEmailChanged']);
            OA_Admin_UI::queueMessage($translated_message, 'local', 'confirm', 0);

            // The "preferences" were written correctly saved to the database,
            // go to the "next" preferences page from here
            OX_Admin_Redirect::redirect(basename($_SERVER['SCRIPT_NAME']));
        }
    }
}

// Set the correct section of the preference pages and display the drop-down menu
$prefSection = "email";
$setPref = $oOptions->getSettingsPreferences($prefSection);
$title = $setPref[$prefSection]['name'];

// Display the settings page's header and sections
$oHeaderModel = new OA_Admin_UI_Model_PageHeaderModel($title);
phpAds_PageHeader('account-user-index', $oHeaderModel);


// Get the current logged in user details
$oUser = OA_Permission::getCurrentUser();
$aUser = $oUser->aUser;

// Prepare an array of HTML elements to display for the form, and
// output using the $oOption object
$aSettings = array (
    array (
        'text'  => $strChangeEmail,
        'items' => array (
            array (
                'type'     => 'plaintext',
                'name'     => 'username',
                'value'    => $aUser['username'],
                'text'     => $strUsername,
                'size'     => 35
            ),
            array (
                'type'    => 'break'
            ),
            array (
                'type'    => 'plaintext',
                'name'    => 'contact_name',
                'value'   => $aUser['contact_name'],
                'text'    => $strFullName,
                'size'    => 35
            ),
            array (
                'type'    => 'break'
            ),
            array (
                'type'    => 'password',
                'name'    => 'pw',
                'text'    => $strPassword,
                'req'     => true,
            ),
            array (
                'type'    => 'break'
            ),
            array (
                'type'    => 'text',
                'name'    => 'email_address',
                'value'   => $aUser['email_address'],
                'text'    => $strEmailAddress,
                'size'    => 35,
                'check'   => 'email'
            )
        )
    )
);

$oOptions->show($aSettings, $aErrormessage);

// Display the page footer
phpAds_PageFooter();

?>