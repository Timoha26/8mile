<?php

namespace App;

use Telegram\Bot\Api;

class OrderNotification{
    private $customer_name;

    private $customer_phone;

    private $info;

    private $message_text;

    public function __construct($data)
    {
        $message_text = [];
        $this->customer_name = $data['customer_name'];
        $this->customer_phone = $data['customer_phone'];
        $this->info = $data['info'];

        if(!empty($this->customer_name) && !empty($this->customer_phone)){
            array_push($message_text, $this->customer_name);
            array_push($message_text, "(" . $this->customer_phone . ")");
        } elseif (!empty($this->customer_name) && empty($this->customer_phone)){
            array_push($message_text, $this->customer_name);
        } elseif (empty($this->customer_name) && !empty($this->customer_phone)){
            array_push($message_text, $this->customer_phone);
        } else{
            array_push($message_text, "неизвестный");
        }

        if(!empty($this->info)){
            array_push($message_text, "\n" . $this->info);
        }
        array_push($message_text, "\n" . $this->info);
        $this->message_text = implode($message_text);
    }

    public function toTelegram(){
        $telegram = new Api();
        $reply_markup = json_encode(['inline_keyboard' => [[['text' => "Показать список заказов", 'url' => "http://8mile42.ru/orders?skip=0"]]]]);
        try{
            $updates = $telegram->getUpdates();
            foreach ($updates as $update) {
                $chat_id = $update->getMessage()->getChat()->getid();
                $response = $telegram->sendMessage([
                    'chat_id' => $chat_id,
                    'text' => $this->message_text,
                    'reply_markup' => $reply_markup
                ]);
                $message_id = $response->getMessageId();
            }
        } catch (\Exception $ex){
            dump($ex);
        }
    }
}