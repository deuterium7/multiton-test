<?php

namespace AlexanderZabornyi\MultitonTest;

final class Database
{
    private static $instance = [];

    /**
     * Создать уникальный экземпляр в общий пул
     *
     * @param string $dbName
     *
     * @return Database
     */
    public static function getInstance(string $dbName): Database
    {
        if (! isset(self::$instance["$dbName"])) {
            self::$instance["$dbName"] = new self();
        }

        return self::$instance["$dbName"];
    }

    /**
     * Скрываем конструктор
     */
    private function __construct()
    {
    }

    /**
     * Скрываем клонирование
     */
    private function __clone()
    {
    }

    /**
     * Скрываем десериализацию
     */
    private function __wakeup()
    {
    }
}