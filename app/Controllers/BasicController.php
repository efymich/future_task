<?php


namespace app\Controllers;

use app\Models\MessageRepo;
use core\Model\Message;

class BasicController
{
    public function index() {
        return MessageRepo::showAll();
    }

    public function postComment(array $data) {

        if (empty($data['post']['name']) || empty($data['post']['content'])) {
            return ['error' => "Введите все данные"];
        }

        $message = new Message(htmlspecialchars($data['post']['name'],ENT_DISALLOWED),htmlspecialchars($data['post']['content'],ENT_DISALLOWED));

        MessageRepo::putData($message);

        return $this->index();
    }

    public function deleteAll(array $data) {

        if (empty($data['post']['delete'])) {
            return [];
        }

        MessageRepo::deleteAll();

        return $this->index();
    }
}