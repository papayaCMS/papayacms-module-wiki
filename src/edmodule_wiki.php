<?php
/**
* Wiki modification module
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Beta-Wiki
* @version $Id: edmodule_wiki.php 39561 2014-03-14 15:10:45Z weinert $
*/

/**
* Wiki modification module
*
* Wiki administration
*
* @package Papaya-Modules
* @subpackage Beta-Wiki
*/
class edmodule_wiki extends base_module {
  /**
  * Permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Manage'
  );

  /**
  * Execute module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $wiki = new wiki_admin();
      $wiki->module = $this;
      $wiki->layout = $this->layout;
      $wiki->execute();
      $wiki->getXML($this->layout);
      $wiki->getButtons();
    }
  }
}

