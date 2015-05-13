<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    block
 * @subpackage emon
 * @copyright  Hiroshima Shudo Univ. & VERSION2 Inc. <info@ver2.jp>
 * 
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2013051404;        // The current plugin version (Date: YYYYMMDDXX)

//Moodle2.3.6対応させる場合のバージョン番号
//$plugin->version   = 2012062506;        // The current plugin version (Date: YYYYMMDDXX)

$plugin->requires  = 2012062506;        // Requires this Moodle version
$plugin->component = 'block_emon';  // Full name of the plugin (used for diagnostics)
