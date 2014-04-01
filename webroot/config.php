<?php
/**
 * Config-file for Kefft. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Kefft paths.
 *
 */
define('KEFFT_INSTALL_PATH', __DIR__ . '/..');
define('KEFFT_THEME_PATH', KEFFT_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(KEFFT_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Kefft variable.
 *
 */
$kefft = array();
 
 
/**
 * Site wide settings.
 *
 */
$kefft['lang']         = 'sv';
$kefft['title_append'] = ' | Kefft en webbtemplate';

$kefft['navbar'] =  array(
  'home'  => array('text'=>'Hem',  'url'=>'index.php'),
  'test'  => array('text'=>'Test',  'url'=>'test.php'),
);

$kefft['header'] = <<<EOD
<img class='sitelogo' src='img/kefft.png' alt='Kefft Logo'/>
<span class='sitetitle'>Kefft webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$kefft['footer'] = <<<EOD
<span class='sitefooter'>Copyright (c) David Lidström (me@dlid.se) | 
<a href='https://github.com/dlid/Kefft-base'>Kefft på GitHub</a></span>
<span class='sitefooter'>
Verktyg: <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a> |
<a href="http://validator.w3.org/check/referer">HTML5</a> |
<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
</span>
EOD;



/**
 * Theme related settings.
 *
 */
$kefft['stylesheets'] = array('css/style.css');
$kefft['favicon']  = 'favicon.ico';
$kefft['pageId'] = null;

/**
 * Settings for JavaScript.
 *
 */
$kefft['modernizr'] = 'js/modernizr.js';
$kefft['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js';
//$anax['jquery'] = null; // To disable jQuery

/**
 * Settings for JavaScript.
 *
 */
// $kefft['javascript_include'] = array();
$kefft['javascript_include'] = array('js/main.js');

/**
 * Google analytics.
 *
 */
$kefft['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics