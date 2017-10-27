<?php

namespace AlexanderZabornyi\MultitonTest\Tests;

use AlexanderZabornyi\MultitonTest\Database;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testUniqueness()
    {
        $mysqlFirst = Database::getInstance('mysql');
        $mysqlSecond = Database::getInstance('mysql');
        $sqlite = Database::getInstance('sqlite');

        $this->assertInstanceOf(Database::class, $mysqlFirst);
        $this->assertSame($mysqlFirst, $mysqlSecond);
        $this->assertNotSame($mysqlFirst, $sqlite);
    }
}