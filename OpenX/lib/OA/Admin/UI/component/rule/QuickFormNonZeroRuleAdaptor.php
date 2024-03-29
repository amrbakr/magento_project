<?php
/*
+---------------------------------------------------------------------------+
| OpenX v2.8                                             |
| ==========                            |
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
$Id: QuickFormNonZeroRuleAdaptor.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/
require_once MAX_PATH.'/lib/OA/Admin/UI/component/rule/BaseQuickFormRuleToJQueryRuleAdaptor.php';


/**
 * Wrapper rule for HTML_QuickForm "nonzero" rule.
 */
class OA_Admin_UI_Rule_JQueryNonZeroRule
    extends OA_Admin_UI_Rule_BaseQuickFormRuleToJQueryRuleAdaptor   
{
    /**
     * Returns Jquery validation plugin min value rule set to  
     * "min": 1 
     * @param array $rule
     * @return string
     */
    public function getJQueryValidationRule($rule)
    {
        return "\"min\": 1";    
    }
    
    
    public function getJQueryValidationMessage($rule)
    {
        return "\"min\": \"".$rule['message']."\"";
    }    
    
}

?>
