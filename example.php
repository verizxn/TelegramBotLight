<?php

require_once __DIR__.'/vendor/autoload.php';

$tg = new Verlzon\Telegrambotlight\Telegram('token', __DIR__.'/logs');
$update = $tg->getUpdate();

if(isset($update['text']))
	$tg->request('sendMessage', [
		'chat_id' => $update['chat']['id'],
		'text' => ($update['text'] == '/start')?'Hello world!':'Command not found...',
	]);