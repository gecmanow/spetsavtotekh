<?php

$msg = "Заявка на заказ звонка: "
    ."\nИмя: ". $_POST['name']
    ."\nТелефон: ". $_POST['tel']
    ."\nСогласие на обработку персональных данных: " . $_POST['check'];
$userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";

$chatId = '-1001248883137';
$token='1703987827:AAELCvwHwAHvlfBSEgQfBiblT9Fp_0pPL-0';
$url = "https://api.telegram.org/bot".$token."/sendMessage";
$params = array(
    'chat_id' => $chatId,
    'text' => $msg,
    'disable_web_page_preview' => null,
    'reply_to_message_id' => null,
    'reply_markup' => null
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER         => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING       => "",
    CURLOPT_USERAGENT      => $userAgent,
    CURLOPT_AUTOREFERER    => true,
    CURLOPT_CONNECTTIMEOUT => 120,
    CURLOPT_TIMEOUT        => 120,
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_SSL_VERIFYPEER => false
);
$ch = curl_init();
curl_setopt_array($ch, $options);
curl_exec($ch);
curl_close($ch);

header('Location: /thanks.html');
