<?php
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
 * Defines the metadata for the Reflect Webservice
 *
 * @package    local_reflect
 * @copyright  2016 Alexander Kiy <alekiy@uni-potsdam.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version  = 2016080401;
$plugin->requires = 2010112400;
$plugin->cron     = 0;
$plugin->release = '1.1 (Build: 20150224020)';
$plugin->component = 'local_reflect';        // Full name of the plugin (used for diagnostics).
$plugin->maturity = MATURITY_STABLE;