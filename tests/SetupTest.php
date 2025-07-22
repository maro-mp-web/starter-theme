<?php

use PHPUnit\Framework\TestCase;
use Starter\Theme\Setup;

final class SetupTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists(Setup::class));
    }
}
