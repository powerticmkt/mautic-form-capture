<?php
/*
* Plugin Name: Mautic Form Capture
* Description: Automatically capture and submit form submissions to Mautic
* Version: 1.0.0
* Author: Powertic
* Author URI: https://github.com/powerticmkt/mautic-form-capture/
*/

function powertic_mautic_capture_js() {
return <<<EOT

	//

EOT;
}


require 'vendor/yahnis-elsts/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/powerticmkt/mautic-form-capture',
	__FILE__,
	'mautic-form-capture'
);

$myUpdateChecker->setBranch('master');
