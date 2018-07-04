<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('php/line-bot.php');

$channelSecret = '9888fe460c0829ae8ecb181c6cf9ad3a';
$access_token  = 'vTvmYMZEHXc+NctGN3n1ZmBffzkO3sROq1HyP3Oegbzjqr92zV1vD+Gw8WBPXFttjGIM4Zp0EIkybpSbl1z6Dwri54Qgtrq4qaRte+x/j23ww5wbICrayMunudQbaAy9v4eMw+cEGfhBHAmKz7h28wdB04t89/1O/w1cDnyilFU=';
$bot = new BOT_API($channelSecret, $access_token);
	
	
$bot->sendMessageNew('Ue8b4d0638b780f9dde18f5806ea391a8', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
