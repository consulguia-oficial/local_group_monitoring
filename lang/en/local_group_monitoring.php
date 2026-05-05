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
 * English strings for the Group Monitoring plugin.
 *
 * @package    local_group_monitoring
 * @copyright  2026 Consulguia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Group monitoring';
$string['pluginnamesettings'] = 'Group monitoring settings';
$string['local_group_monitoring:view'] = 'View group monitoring dashboard';
$string['local_group_monitoring:creategroup'] = 'Create monitored groups';
$string['local_group_monitoring:addmember'] = 'Add members to monitored groups';
$string['local_group_monitoring:createtutor'] = 'Create tutor users';
$string['local_group_monitoring:managepolo'] = 'Manage polo profile field';
$string['local_group_monitoring:deletegroup'] = 'Delete monitored groups';
$string['local_group_monitoring:config'] = 'Configure group monitoring plugin';
$string['dashboard'] = 'Group monitoring dashboard';
$string['groups'] = 'Groups';
$string['creategroup'] = 'Create group';
$string['groupdetail'] = 'Group detail';
$string['members'] = 'Members';
$string['addmember'] = 'Add member';
$string['importcsv'] = 'Import via CSV';
$string['courseid'] = 'Course';
$string['polo'] = 'Polo';
$string['tutor'] = 'Tutor';
$string['groupname'] = 'Group name';
$string['username'] = 'Username';
$string['fullname'] = 'Full name';
$string['added_via'] = 'Added via';
$string['added_via_manual'] = 'Manual';
$string['added_via_csv'] = 'CSV';
$string['error_no_polo'] = 'No polo found for the selected course.';
$string['error_no_tutor'] = 'No tutors assigned to this polo.';
$string['error_duplicate'] = 'A group with this name already exists in this course.';
$string['error_csv_empty'] = 'No usernames were found in the uploaded CSV file.';
$string['error_csv_invalid'] = 'Invalid CSV file. Expected one username per line.';
$string['error_invalidemail'] = 'Invalid email address.';
$string['error_invalidrole'] = 'The selected role is not allowed for tutor creation.';
$string['error_unexpected'] = 'An unexpected error occurred. Please contact the site administrator.';
$string['error_usernotfound'] = 'The user {$a} was not found in Moodle.';
$string['error_usernameexists'] = 'This username already exists in Moodle.';
$string['group_created'] = 'Group "{$a}" created successfully.';
$string['group_created_plain'] = 'Group created successfully.';
$string['group_deleted'] = 'Group deleted successfully.';
$string['member_added'] = 'Member added successfully.';
$string['members_imported'] = '{$a} members imported successfully.';
$string['polo_field_created'] = 'The configured polo profile field is available.';
$string['tutor_created'] = 'Tutor created and enrolled successfully.';
$string['courses'] = 'Courses';
$string['polos'] = 'Polos';
$string['tutors'] = 'Tutors';
$string['polofield'] = 'Profile field for polo';
$string['polofield_desc'] = 'Select the custom user profile field used to group polos. If no field exists, the default "polo" field will be used and created.';
$string['privacy:metadata:local_groupmon_groups'] = 'Stores monitored groups created and managed by the Group Monitoring plugin.';
$string['privacy:metadata:local_groupmon_groups:name'] = 'The monitored group name.';
$string['privacy:metadata:local_groupmon_groups:courseid'] = 'The course where the monitored group was created.';
$string['privacy:metadata:local_groupmon_groups:polo'] = 'The polo associated with the monitored group.';
$string['privacy:metadata:local_groupmon_groups:tutorid'] = 'The user ID of the tutor associated with the monitored group.';
$string['privacy:metadata:local_groupmon_groups:moodle_groupid'] = 'The corresponding Moodle group ID.';
$string['privacy:metadata:local_groupmon_groups:timecreated'] = 'The time when the monitored group was created.';
$string['privacy:metadata:local_groupmon_groups:timemodified'] = 'The time when the monitored group was last modified.';
$string['privacy:metadata:local_groupmon_groups:usermodified'] = 'The user ID of the user who last modified the monitored group.';
$string['privacy:metadata:local_groupmon_members'] = 'Stores members added to monitored groups.';
$string['privacy:metadata:local_groupmon_members:groupid'] = 'The monitored group ID.';
$string['privacy:metadata:local_groupmon_members:userid'] = 'The user ID of the group member.';
$string['privacy:metadata:local_groupmon_members:username'] = 'The username of the group member.';
$string['privacy:metadata:local_groupmon_members:added_via'] = 'The method used to add the member to the group.';
$string['privacy:metadata:local_groupmon_members:timecreated'] = 'The time when the member was added.';
$string['privacy:metadata:local_groupmon_members:usermodified'] = 'The user ID of the user who added or last modified the member record.';
$string['privacy:metadata:local_groupmon_polos'] = 'Stores polos managed by the Group Monitoring plugin.';
$string['privacy:metadata:local_groupmon_polos:name'] = 'The polo name.';
$string['privacy:metadata:local_groupmon_polos:timecreated'] = 'The time when the polo was created.';
$string['privacy:metadata:local_groupmon_polos:timemodified'] = 'The time when the polo was last modified.';
$string['privacy:metadata:local_groupmon_polos:usermodified'] = 'The user ID of the user who last modified the polo.';
