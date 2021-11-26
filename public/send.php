<?php

$errors = array();
$fields = array(
    'offer_form_name' => $_POST['offer_form_name'],
    'offer_form_phone' => $_POST['offer_form_phone']
);

$reg_name = '/^[а-я]{2,18}$/iu';
$reg_phone = '/^(\+7|7|8)?[\s\-]?\(?[39][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';


foreach($fields as $field => $field_val){
    // checking all fields for emptiness
    if($field_val == '' || !isset($field_val)){
        $errors[$field] = 'Поле обязательно для заполнения.';
    } else {
        // checking the "name" field for matching a regular expression
        if(!preg_match($reg_name, $fields['offer_form_name'])) {
            $errors['offer_form_name'] = 'Имя должно быть от 2 до 18 символов русского алфавита.';
        }
        // checking the "phone" field for matching a regular expression
        if(!preg_match($reg_phone, $fields['offer_form_phone'])) {
            $errors['offer_form_phone'] = 'Введите телефон в федеральном формате.';
        }
    }
}

if($_POST['offer_form_check'] == 'false') {
    $errors['offer_form_check'] = 'Согласие обязательно.';
}

// делаем ответ для клиента
if(empty($errors)) {
    // если нет ошибок сообщаем об успехе
    echo json_encode(array('result' => 'success'));

    $msg = "Заявка на заказ звонка: "
        ."\nИмя: ". $fields['offer_form_name']
        ."\nТелефон: ". $fields['offer_form_phone']
        ."\nСогласие на обработку персональных данных: " . $_POST['offer_form_check'];
    $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
    //product chat_id -1001358565564
    $chat_id = '261803700';
    $token='2142955932:AAH4A60b0j2IXgOS2cqzHeILCJxL20L0Nrs';
    $url = "https://api.telegram.org/bot".$token."/sendMessage";
    $params = array(
        'chat_id' => $chat_id,
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
} else {
    // если есть ошибки то отправляем
    echo json_encode(array('result' => 'error', 'text_error' => $errors));
}
