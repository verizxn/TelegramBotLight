<?php

require_once __DIR__.'/vendor/autoload.php';

$tg = new verizxn\Telegrambotlight\Telegram('token', __DIR__.'/logs');
$update = $tg->getUpdate();

if(isset($update['message']['text']))
	$tg->request('sendMessage', [
		'chat_id' => $update['message']['chat']['id'],
		'text' => ($update['message']['text'] == '/start')?'Hello world!':'Command not found...',
	]);