<?php

namespace app\Models;

use core\Model\Message;

class MessageRepo
{
    private static string $tableName = "comments";

    public static function showAll() {
        $sql = "SELECT FROM " . self::$tableName ;

        return self::execute($sql);
    }

    /**
     * @param Message $message
     */
    public static function putData(Message $message) {
        $sql = "INSERT INTO " . self::$tableName . " VALUES (?,?,?)";

        return self::execute($sql,$message->name,$message->date,$message->text);
    }

    private static function execute(string $sql, ...$params) {
        $result = databaseExecute($sql,...$params);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}