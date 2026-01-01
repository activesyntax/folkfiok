<?php defined('BASEPATH') OR exit('No direct script access allowed');


// PRODUCTION CODE
$config['geoInfo'] = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

// Testing EURO
//$config['geoInfo'] = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=195.28.149.248'));

// Testing HUF
//$config['geoInfo'] = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=86.101.192.74'));

$config['countyCode'] = $config['geoInfo']['geoplugin_countryCode'] == '' ? 'HU' : $config['geoInfo']['geoplugin_countryCode'];

switch ($config['geoInfo']['geoplugin_currencyCode']) {
    case 'EUR':
        $config['currencyCode'] = 'EUR';
        $config['currencySymbol'] = $config['geoInfo']['geoplugin_currencySymbol'];
        break;

    default:
        $config['currencyCode'] = 'HUF';
        $config['currencySymbol'] = 'Ft';
        break;
}

//$config['currencyCode'] = $config['geoInfo']['geoplugin_currencyCode'] == '' ? 'HU' : $config['geoInfo']['geoplugin_countryCode'];