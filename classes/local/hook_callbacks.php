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

namespace tiny_ai\local;

use local_ai_manager\ai_manager_utils;

/**
 * Hook listener callbacks.
 *
 * @package    tiny_ai
 * @copyright  2025 ISB Bayern
 * @author     Philipp Memmel
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {

    /**
     * Provide additional information about which purposes are being used by this plugin.
     *
     * @param \local_ai_manager\hook\purpose_usage $hook the purpose_usage hook object
     */
    public static function handle_purpose_usage(\local_ai_manager\hook\purpose_usage $hook): void {
        $hook->set_component_displayname('tiny_ai', get_string('pluginname_userfaced', 'tiny_ai'));
        foreach (\tiny_ai\local\utils::get_purpose_placedescriptions() as $description) {
            $hook->add_purpose_usage_description($description['purpose'], 'tiny_ai', $description['placedescription']);
        }
    }
}
