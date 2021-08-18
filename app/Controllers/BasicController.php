<?php


namespace app\Controllers;

use app\Models\MessageRepo;
use core\Model\Message;
use mysqli_sql_exception;

class BasicController
{
    public function index() {
        return MessageRepo::showAll();
    }

    public function postComment(array $data) {

        // TODO: описать проверку данных

        //TODO: описать обработку ошибок

        if (!isset($data['post']) || empty($data['post']['name']) || $data['post']['date'] || $data['post']['content']) {
            return ['error' => "Введите все данные"];
        }

        $message = new Message($data['post']['name'],$data['post']['date'],$data['post']['content']);

        MessageRepo::putData($message);

        return $this->index();
    }

}