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
$Id: Html.php 81772 2012-09-11 00:07:29Z chris.nutting $
*/

/**
 * HTML class for static data
 */
require_once MAX_PATH.'/lib/pear/HTML/QuickForm/static.php';

/**
 * A pseudo-element used for adding raw HTML to form
 * 
 * Intended for use with the default renderer only, template-based
 * ones may (and probably will) completely ignore this
 * 
 * Adds name to element to allow hiding stuff
 */
class OA_Admin_UI_Component_Html extends HTML_QuickForm_static
{
    // {{{ constructor

   /**
    * Class constructor
    * 
    * @param string $name   element name
    * @param string $text   raw HTML to add
    * @access public
    * @return void
    */
    function OA_Admin_UI_Component_Html($name = null, $text = null)
    {
        $this->HTML_QuickForm_static($name, null, $text);
        $this->_type = 'html';
    }

    // }}}
    // {{{ accept()

   /**
    * Accepts a renderer
    *
    * @param HTML_QuickForm_Renderer    renderer object (only works with Default renderer!)
    * @access public
    * @return void 
    */
    function accept(&$renderer)
    {
        $renderer->renderHtml($this);
    } // end func accept

    // }}}

} //end class HTML_QuickForm_html
?>
