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

/**
 * Utility methods for tiny_ai.
 *
 * @package    tiny_ai
 * @copyright  2025 ISB Bayern
 * @author     Philipp Memmel
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class utils {

    /**
     * Returns the places used for the different purposes.
     *
     * @return array Array of associative arrays of the form ['purpose' => ..., 'placedescription' => ...]
     */
    public static function get_purpose_placedescriptions(): array {
        $returnarray = [];
        $returnarray[] = [
                'purpose' => 'singleprompt',
                'placedescription' => get_string('purposeplacedescription_freeinputtextarea', 'tiny_ai'),
        ];
        $returnarray[] = [
                'purpose' => 'singleprompt',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_describe', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'singleprompt',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_summarize', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'translate',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_translate', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'imggen',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_imggen', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'tts',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_tts', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'itt',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_imagetotext', 'tiny_ai')),
        ];
        $returnarray[] = [
                'purpose' => 'itt',
                'placedescription' => get_string('purposeplacedescription_toolprefix', 'tiny_ai',
                        get_string('toolname_describeimg', 'tiny_ai')),
        ];
        return $returnarray;
    }
}
