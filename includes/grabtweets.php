<?

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'NmlAuK76cw6riIJSHGwT2gAQs';
$CONSUMER_SECRET = 'u75d10LP3z29UYfwnJanfpFLEYPGf1G57sJ4u8GoFBb5SY2cpj';
$ACCESS_TOKEN = '4845733430-92pzC0h78LUw5ufefpPKSlxOyCs4L5r2CIDw5MC';
$ACCESS_TOKEN_SECRET = 'Lu1ZqSf9Xb7l99VMF68Ut5QuI3PkOO48zrv005KOlESlB';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);

?>