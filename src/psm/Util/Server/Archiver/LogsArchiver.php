<?php
/**
 * Monitor
 * Monitor your servers and websites.
 *
 * This file is part of Monitor.
 * Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Pepijn Over <pep@mailbox.org>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.2.0
 * @link        Monitor
 * @since       phpservermon 3.1
 **/

/**
 * Cleanup log table
 */
namespace psm\Util\Server\Archiver;
use psm\Service\Database;

class LogsArchiver implements ArchiverInterface {

	/**
	 * Database service
	 * @var \psm\Service\Database $db
	 */
	protected $db;

	function __construct(Database $db) {
		$this->db = $db;
	}

	/**
	 * Currently there is not really a log archive.
	 *
	 * It stays in the log table until cleaned up.
	 * @param int $server_id
	 */
	public function archive($server_id = null) {
		return true;
	}

	public function cleanup(\DateTime $retention_date, $server_id = null) {
		$sql_where_server = ($server_id !== null)
				// this is obviously not the cleanest way to implement this when using paramter binding.. sorry.
				? ' `server_id` = ' . intval($server_id) . ' AND '
				: '';

		$this->db->execute(
			"DELETE FROM `".PSM_DB_PREFIX."log` WHERE {$sql_where_server} `datetime` < :latest_date",
			array('latest_date' => $retention_date->format('Y-m-d 00:00:00')),
			false
		);
		return true;
	}
}