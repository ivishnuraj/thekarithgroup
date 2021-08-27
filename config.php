<?php 
require "vendor/autoload.php";
//var_dump($_SERVER['REQUEST_METHOD'],$_SERVER['PATH_INFO']); die();
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
/**
 * Karith Design Build
 * Settings 
 *
 * @attr    something    some information about something
 * @attr    etc          etc etc
 */

// Set TimeZone

date_default_timezone_set('Asia/Kolkata');

// Set URL 

define('siteurl', $_ENV['SITE_URL'] ?? 'localhost',);

include "functions.php";
LoadPage();
