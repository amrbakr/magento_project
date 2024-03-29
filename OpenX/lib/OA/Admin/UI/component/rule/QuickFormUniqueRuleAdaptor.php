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
$Id: QuickFormUniqueRuleAdaptor.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/
require_once MAX_PATH.'/lib/OA/Admin/UI/component/rule/BaseQuickFormRuleToJQueryRuleAdaptor.php';


/**
 * Wrapper rule for OA_Admin_UI_Rule_Unique"unique" rule.
 */
class OA_Admin_UI_Rule_JQueryUniqueRule
    extends OA_Admin_UI_Rule_BaseQuickFormRuleToJQueryRuleAdaptor   
{
    /**
     * Returns a custom JS function which adds unique method to jquery
     */
    public function getJQueryValidationMethodCode()
    {
        return "function(value, element, otherValuesArr) {
                    return $.inArray(value, otherValuesArr) == -1;
                }";
    }
    
    
    /**
     * Returns custom Jquery validation "unique" rule 
     * "unique": ["name1", "name2", "name3"]
     * @param array $rule
     * @return JS string with unique rule definition 
     */
    public function getJQueryValidationRule($rule)
    {
        if (empty($rule['format'])) {
            return '"'.$rule['type'].'": []';
        }
        
        $aSlashedNames = array_map("addslashes", $rule['format']);
        //comma separate, double quote list of items
        $sNamesList = '"'.implode('", "', $aSlashedNames).'"';
        
        //complete array string
        return '"'.$rule['type'].'": '.' ['.$sNamesList.']';
    }
}

?>
