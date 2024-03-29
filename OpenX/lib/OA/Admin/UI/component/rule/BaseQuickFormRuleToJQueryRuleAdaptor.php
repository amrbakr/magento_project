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
$Id: BaseQuickFormRuleToJQueryRuleAdaptor.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/
require_once MAX_PATH.'/lib/OA/Admin/UI/component/rule/QuickFormRuleToJQueryRuleAdaptor.php';

/**
 * Base HTML_QuickForm to JQuery validation rule adaptor. 
 */
class OA_Admin_UI_Rule_BaseQuickFormRuleToJQueryRuleAdaptor
    implements OA_Admin_UI_Rule_QuickFormToJQueryRuleAdaptor
{
    /**
     * Returns null by default
     *
     * @return unknown
     */
    public function getJQueryValidationMethodCode()
    {
        return null;    
    }
    
    
    /**
     * Returns Jquery validation plugin compliant rule definition for a given quickform rule
     * Query validation plugin accepts format is as follows:
     * <ruleName>:<ruleOptions>
     * 
     * Returned string is constructed as follows:
     * "$rule['type']" : $rule['format'] 
     *
     * @param array $rule
     * @return string
     */
    public function getJQueryValidationRule($rule)
    {
        return "\"".$rule['type']."\"".": ".$rule['format'];        
    }

    
    /**
     * Returns Jquery validation plugin compliant message definition for a given quickform rule
     * 
     *  Query validation plugin accepts format is as follows:
     *  <ruleName>:<ruleMessage>
     *
     * @param array $rule
     * @return string
     */
    public function getJQueryValidationMessage($rule)
    {
        return "\"".$rule['type']."\"".": \"".$rule['message']."\"";
    }    
}
?>
