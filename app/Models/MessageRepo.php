<?php

namespace app\Models;

use core\Model\Message;

class MessageRepo
{
    private static string $tableName = "comments";

    public static function showAll() {
        $sql = "SELECT name,content,date FROM " . self::$tableName ;

        $result = databaseExecute($sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    /**
     * @param Message $message
     */
    public static function putData(Message $message): void {
        $sql = "INSERT INTO " . self::$tableName . "(name,content) VALUES (?,?)";

        databaseExecute($sql,$message->name,$message->content);
    }

    public static function deleteAll() {
        $sql = "DELETE FROM " . self::$tableName;

        databaseExecute($sql);
    }
}