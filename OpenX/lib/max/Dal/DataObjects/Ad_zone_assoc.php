<?php

/*
+---------------------------------------------------------------------------+
| OpenX  v2.8                                                              |
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
$Id: Ad_zone_assoc.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/

/**
 * Table Definition for ad_zone_assoc
 */
require_once 'DB_DataObjectCommon.php';

class DataObjects_Ad_zone_assoc extends DB_DataObjectCommon
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'ad_zone_assoc';                   // table name
    public $ad_zone_assoc_id;                // MEDIUMINT(9) => openads_mediumint => 129 
    public $zone_id;                         // MEDIUMINT(9) => openads_mediumint => 1 
    public $ad_id;                           // MEDIUMINT(9) => openads_mediumint => 1 
    public $priority;                        // DOUBLE() => openads_double => 1 
    public $link_type;                       // SMALLINT(6) => openads_smallint => 129 
    public $priority_factor;                 // DOUBLE() => openads_double => 1 
    public $to_be_delivered;                 // TINYINT(1) => openads_tinyint => 145 

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObjects_Ad_zone_assoc',$k,$v); }

    var $defaultValues = array(
                'priority' => 0,
                'link_type' => 1,
                'priority_factor' => 0,
                'to_be_delivered' => 1,
                );

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE

    function _auditEnabled()
    {
        return true;
    }

    function _getContextId()
    {
        return $this->ad_zone_assoc_id;
    }

    function _getContext()
    {
        return 'Ad Zone Association';
    }

    /**
     * A method to return an array of account IDs of the account(s) that
     * should "own" any audit trail entries for this entity type; these
     * are NOT related to the account ID of the currently active account
     * (which is performing some kind of action on the entity), but is
     * instead related to the type of entity, and where in the account
     * heirrachy the entity is located.
     *
     * @return array An array containing up to three indexes:
     *                  - "OA_ACCOUNT_ADMIN" or "OA_ACCOUNT_MANAGER":
     *                      Contains the account ID of the manager account
     *                      that needs to be able to see the audit trail
     *                      entry, or, the admin account, if the entity
     *                      is a special case where only the admin account
     *                      should see the entry.
     *                  - "OA_ACCOUNT_ADVERTISER":
     *                      Contains the account ID of the advertiser account
     *                      that needs to be able to see the audit trail
     *                      entry, if such an account exists.
     *                  - "OA_ACCOUNT_TRAFFICKER":
     *                      Contains the account ID of the trafficker account
     *                      that needs to be able to see the audit trail
     *                      entry, if such an account exists.
     */
    function getOwningAccountIds()
    {
        // Ad/zone associations are a special case, as both the
        // advertiser and the website accounts should be able to see
        // the audit entries, so the results of two calls need to be
        // merged
        $aAdvertiserAccountIds = array();
        if (!empty($this->ad_id)) {
            // Ad/zone assocs don't have an account_id, get it from
            // the parent banner (stored in the "banners" table) using
            // the "ad_id" key
            $aAdvertiserAccountIds = parent::getOwningAccountIds('banners', 'ad_id');
        }
        $aWebsiteAccountIds = array();
        if (!empty($this->zone_id)) {
            // Ad/zone assocs don't have an account_id, get it from
            // the parent zone (stored in the "zones" table) using
            // the "zone_id" key
            $aWebsiteAccountIds = parent::getOwningAccountIds('zones', 'zone_id');
        }
        // Check that the manager account IDs match from the two results
        if (isset($aAdvertiserAccountIds[OA_ACCOUNT_MANAGER]) && isset($aWebsiteAccountIds[OA_ACCOUNT_MANAGER])) {
            if ($aAdvertiserAccountIds[OA_ACCOUNT_MANAGER] != $aWebsiteAccountIds[OA_ACCOUNT_MANAGER]) {
                $message = "Cannot locate owning account IDs for ad/zone association, as manager account IDs, " .
                            "do not match, where ad ID was {$this->ad_id} and zone ID was {$this->zone_id}.";
                MAX::raiseError($message, PEAR_LOG_ERR);
            }
        }
        // Merge the arrays and return
        $aResult = array_merge($aAdvertiserAccountIds, $aWebsiteAccountIds);
        return $aResult;
    }

    /**
     * build an agency specific audit array
     *
     * @param integer $actionid
     * @param array $aAuditFields
     */
    function _buildAuditArray($actionid, &$aAuditFields)
    {
        $aAuditFields['key_desc']     = 'Ad #'.$this->ad_id.' -> Zone #'.$this->zone_id;
        switch ($actionid)
        {
            case OA_AUDIT_ACTION_UPDATE:
                        $aAuditFields['bannerid']            = $this->bannerid;
                        break;
        }
    }

}

?>