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
 * @since		phpservermon 3.0
 **/

namespace psm\Module\Config;

use psm\Module\ModuleInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ConfigModule implements ModuleInterface {

	public function load(ContainerBuilder $container) {

	}

	public function getControllers() {
		return array(
			'config' => __NAMESPACE__ . '\Controller\ConfigController',
		);

	}
}