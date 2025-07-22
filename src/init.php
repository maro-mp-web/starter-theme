<?php

namespace Starter;

use Starter\Theme\Setup;
use Starter\Theme\Assets;

new Setup();

class Init
{
    public static function registerServices(): void
    {
        error_log('Registering services...');
        $assets = new Assets();
        $assets->register();
    }
}


Init::registerServices();
