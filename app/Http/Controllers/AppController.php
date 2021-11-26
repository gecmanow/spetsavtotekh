<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('main');
    }

    public function autotower() {
        return view('autotower');
    }

    public function bobcat() {
        return view('bobcat');
    }

    public function thanks() {
        return view('thanks');
    }

    public function send(Request $request) {
        $errors = array();
        $fields = array(
            'offer_form_name' => $request->input('offer_form_name'),
            'offer_form_phone' => $request->input('offer_form_phone')
        );

        $reg_name = '/^[а-я]{2,18}$/iu';
        $reg_phone = '/^(\+7|7|8)?[\s\-]?\(?[39][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';

        foreach($fields as $field => $field_val){

            if($field_val == '' || !isset($field_val)){
                $errors[$field] = 'Поле обязательно для заполнения.';
            } else {
                if(!preg_match($reg_name, $fields['offer_form_name'])) {
                    $errors['offer_form_name'] = 'Имя должно быть от 2 до 18 символов русского алфавита.';
                }
                if(!preg_match($reg_phone, $fields['offer_form_phone'])) {
                    $errors['offer_form_phone'] = 'Введите телефон в федеральном формате.';
                }
            }
        }

        if($request->input('offer_form_check') == 'false') {
            $errors['offer_form_check'] = 'Согласие обязательно.';
        }

        if(empty($errors)) {

            echo json_encode(array('result' => 'success'));

            $msg = "Заявка на заказ звонка: "
                ."\nИмя: ". $fields['offer_form_name']
                ."\nТелефон: ". $fields['offer_form_phone']
                ."\nСогласие на обработку персональных данных: " . $request->input('offer_form_check');
            $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
            $chat_id = env('TELEGRAM_CHAT_ID');
            $token = env('TELEGRAM_TOKEN');
            $url = "https://api.telegram.org/bot" . $token . "/sendMessage";
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
            echo json_encode(array('result' => 'error', 'text_error' => $errors));
        }
    }

    public function sendPriceForm(Request $request) {
        $errors = array();
        $fields = array(
            'price_form_name' => $request->input('price_form_name'),
            'price_form_phone' => $request->input('price_form_phone')
        );

        $reg_name = '/^[а-я]{2,18}$/iu';
        $reg_phone = '/^(\+7|7|8)?[\s\-]?\(?[39][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';


        foreach($fields as $field => $field_val){

            if($field_val == '' || !isset($field_val)){
                $errors[$field] = 'Поле обязательно для заполнения.';
            } else {
                if(!preg_match($reg_name, $fields['price_form_name'])) {
                    $errors['price_form_name'] = 'Имя должно быть от 2 до 18 символов русского алфавита.';
                }
                if(!preg_match($reg_phone, $fields['price_form_phone'])) {
                    $errors['price_form_phone'] = 'Введите телефон в федеральном формате.';
                }
            }
        }

        if($request->input('price_form_check') == 'false') {
            $errors['price_form_check'] = 'Согласие обязательно.';
        }

        if(empty($errors)) {

            echo json_encode(array('result' => 'success'));

            $msg = "Заявка на заказ звонка: "
                ."\nИмя: ". $fields['price_form_name']
                ."\nТелефон: ". $fields['price_form_phone']
                ."\nСогласие на обработку персональных данных: " . $request->input('price_form_check');
            $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
            $chat_id = env('TELEGRAM_CHAT_ID');
            $token = env('TELEGRAM_TOKEN');
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
            echo json_encode(array('result' => 'error', 'text_error' => $errors));
        }
    }

    public function sendModalForm(Request $request) {
        $errors = array();
        $fields = array(
            'modal_form_name' => $request->input('modal_form_name'),
            'modal_form_phone' => $request->input('modal_form_phone')
        );

        $reg_name = '/^[а-я]{2,18}$/iu';
        $reg_phone = '/^(\+7|7|8)?[\s\-]?\(?[39][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';


        foreach($fields as $field => $field_val){

            if($field_val == '' || !isset($field_val)){
                $errors[$field] = 'Поле обязательно для заполнения.';
            } else {
                if(!preg_match($reg_name, $fields['modal_form_name'])) {
                    $errors['modal_form_name'] = 'Имя должно быть от 2 до 18 символов русского алфавита.';
                }
                if(!preg_match($reg_phone, $fields['modal_form_phone'])) {
                    $errors['modal_form_phone'] = 'Введите телефон в федеральном формате.';
                }
            }
        }

        if($request->input('modal_form_check') == 'false') {
            $errors['modal_form_check'] = 'Согласие обязательно.';
        }

        if(empty($errors)) {

            echo json_encode(array('result' => 'success'));

            $msg = "Заявка на заказ звонка: "
                ."\nИмя: ". $fields['modal_form_name']
                ."\nТелефон: ". $fields['modal_form_phone']
                ."\nСогласие на обработку персональных данных: " . $request->input('modal_form_check');
            $userAgent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
            $chat_id = env('TELEGRAM_CHAT_ID');
            $token = env('TELEGRAM_TOKEN');
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

            echo json_encode(array('result' => 'error', 'text_error' => $errors));
        }
    }
}
