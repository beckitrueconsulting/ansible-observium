<?php

## Have a look in includes/defaults.inc.php for examples of settings you can set here. DO NOT EDIT defaults.inc.php!

// Database config
$config['db_host'] = 'localhost';
$config['db_user'] = 'observium';
$config['db_pass'] = 'observium';
$config['db_name'] = 'observium';

// Location
$config['install_dir']  = "/opt/observium";

// Thie should *only* be set if you want to *force* a particular hostname/port
// It will prevent the web interface being usable form any other hostname
#$config['base_url']        = "http://observium.company.com";

// Default community list to use when adding/discovering
$config['snmp']['community'] = array("public");

// Authentication Model
$config['auth_mechanism'] = "mysql";    // default, other options: ldap, http-auth, please see documentation for config help

// Enable alerter
// $config['poller-wrapper']['alerter']       = TRUE;

// Set up a default alerter (email to a single address)
$config['email']['default_only'] = TRUE;
$config['email']['enable'] = TRUE;
$config['email']['from'] = "Observium <observium@nohasslewifi.com>";
$config['email']['default'] = "sholom@vikingtech.consulting";

//$config['rrdcached']    = "unix:/var/run/rrdcached.sock";
//$config['rrd_dir'] = "/var/lib/rrdcached/db/observium";

$config['snmp']['max-rep'] = FALSE; 


$config['mydomain']              = "nohasslewifi.com";
$config['autodiscovery']['xdp']            = FALSE; // Autodiscover hosts via discovery protocols
$config['autodiscovery']['ospf']           = FALSE; // Autodiscover hosts via OSPF
$config['autodiscovery']['bgp']            = FALSE; // Autodiscover hosts via iBGP

$config['location_menu_geocoded'] = TRUE;
//$config['frontpage']['order']           = array('status_summary', 'device_status_boxes', 'device_status', 'eventlog');
//$config['location_menu_geocoded'] = FALSE;
// comment above line an uncomment below to enable map
$config['frontpage']['order']           = array('status_summary', 'device_status_boxes', 'map', 'device_status', 'eventlog');

//Map Settings
$config['geocoding']['default']['lat']     =  "36.060206";         // Default latitude
$config['geocoding']['default']['lon']     =  "-115.211255";        // Default longitude

$config['frontpage']['map']['region']              = "United States";
$config['frontpage']['map']['resolution']          = "provinces";
//$config['location_map']['snmplocation'] = "Switch, 36.059914,-115.210194";

//Disable fdb-table module
$config['poller_modules']['fdb-table']                    = 0;

//('status_summary', 'map', 'device_status_boxes', 'device_status', 'eventlog');
//$config['frontpage']['order']           = array('device_status', 'overall_traffic', 'custom_traffic', 'minigraphs', 'syslog', 'eventlog');

//Rancid
//$config['rancid_configs'][]            = '/var/lib/rancid/network/configs/';
//$config['rancid_suffix']                = 'nohasslewifi.com';
//$config['rancid_ignorecomments']        = 0; # Ignore lines starting with #


// End config.php
