<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '9888fe460c0829ae8ecb181c6cf9ad3a';
$access_token  = 'QZn2nt98XHYYNlCtormkSK74XnGLXfGbuTzYNKaE7dDyp03Y//Une6U+qxfVVVMXjGIM4Zp0EIkybpSbl1z6Dwri54Qgtrq4qaRte+x/j23jUWoGen7pNmOx3Zsh+r395kNHYZ3NW5A6ZogX7YpNKgdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
	
$bot->sendMessageNew('Ue8b4d0638b780f9dde18f5806ea391a8', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
