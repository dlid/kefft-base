<?php 
/**
 * This is a Kefft pagecontroller.
 *
 */
// Include the essential config-file which also creates the $kefft variable with its defaults.
include(__DIR__.'/config.php'); 

// We don't need jquery here
$kefft['jquery'] = null;

// Do it and store it all in variables in the kefft container.
$kefft['title'] = "Test page";
$kefft['pageId'] = 'test';
 
$kefft['main'] = <<<EOD
<h1>Testsida</h1>

<p>En andra testsida för att visa navigationen.</p>
EOD;

// Finally, leave it all to the rendering phase of Kefft.
include(KEFFT_THEME_PATH);
