<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/22/19
 * Time: 1:29 PM
 */

return [
	'dynamic' => true,
    'host'     => env('MQTT_HOST','null'),
    'password' => env('MQTT_PASS','null'),
    'username' => env('MQTT_USER','null'),
    'certfile' => env('mqtt_cert_file',''),
    'port'     => env('MQTT_PORT','null'),
    'debug'    => env('mqtt_debug',false), //Optional Parameter to enable debugging set it to True
    'qos'      => env('mqtt_qos', 0), // set quality of service here
    'retain'   => env('mqtt_retain', 0) // it should be 0 or 1 Whether the message should be retained.- Retain Flag
];
