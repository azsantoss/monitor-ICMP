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
 * @author      Daif Alotaibi <daif@daif.net>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.2.0
 * @link        Monitor
 **/

namespace psm\Txtmsg;

class Smsgw extends Core {

    /**
     * Send a text message to one or more recipients
     *
     * @param string $message
     * @return boolean
     */

    public function sendSMS($message) {
        $url  = 'http://api.smsgw.net/SendBulkSMS';
        $post = array(
            'strUserName' => $this->username, 
            'strPassword' => $this->password,
            'strTagName'  => $this->originator,
            'strRecepientNumbers'  => implode(';', $this->recipients),
            'strMessage'  => $message,
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $data = curl_exec($ch);
        if($data == '1') {
            $this->success = true;
        }
        return $this->success;
    }

}
