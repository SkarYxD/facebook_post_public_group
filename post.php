<?php
date_default_timezone_set('UTC');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'Facebook/config.php';
define('FACEBOOK_SDK_V5_SRC_DIR',__DIR__ .'/Facebook/');
require_once __DIR__ .'/Facebook/autoload.php';

$fb = new Facebook\Facebook(array(
  'app_id'  => $config['App_ID'],
  'app_secret' => $config['App_Secret'],
    'default_graph_version' => 'v2.10'
));

 $helper = $fb->getRedirectLoginHelper();

try {
	$accessToken = $helper->getAccessToken();
	$linkData = [
		'link' => 'http://www.google.com',
		'message' => 'Google.com',
	];
	var_dump($fb->post('/' . $group_id . '/feed', $linkData, $accessToken));
	
} catch (Facebook\Exceptions\FacebookResponseException $e) {
	// When Graph returns an error
	echo 'Graph returned an error: ' . $e->getMessage();
} catch (Facebook\Exceptions\FacebookSDKException $e) {
	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

?>
