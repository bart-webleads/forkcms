<?php

namespace Backend\Core\Tests;

use Common\WebTestCase;

abstract class BackendWebTestCase extends WebTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        if (!defined('APPLICATION')) {
            define('APPLICATION', 'Backend');
        }
    }
}
