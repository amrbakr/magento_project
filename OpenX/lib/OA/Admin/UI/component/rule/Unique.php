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
$Id: Unique.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/
require_once 'HTML/QuickForm/Rule.php';

/**
 * Unique elements validation
 */
class OA_Admin_UI_Rule_Unique 
    extends HTML_QuickForm_Rule
{
    /**
     * Checks if an element value is unique
     *
     * @param     string    $value      Value to check
     * @param     array     $otherValues List of values to check against
     * @access    public
     * @return    boolean   true if value is not in the list of otherValues
     */
    function validate($value, $otherValues = array())
    {
        return !in_array($value, $otherValues);
    } 


    function getValidationScript($options = null)
    {
        //return array('', "{jsVar} == ''");
        return array('', ""); //return nothing, we use JQuery validate anyway
    } 

} 
?>
