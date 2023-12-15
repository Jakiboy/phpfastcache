<?php

/**
 *
 * This file is part of Phpfastcache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt and LICENCE files.
 *
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 * @author Contributors  https://github.com/PHPSocialNetwork/phpfastcache/graphs/contributors
 */

use Phpfastcache\CacheManager;
use Phpfastcache\Drivers\Mongodb\Config;
use Phpfastcache\Tests\Helper\TestHelper;
use Phpfastcache\Tests\Config\ConfigFactory;

chdir(__DIR__);
require_once __DIR__ . '/../vendor/autoload.php';
$testHelper = new TestHelper('Mongodb driver');

$cacheInstance = CacheManager::getInstance('Mongodb', ConfigFactory::getDefaultConfig('Mongodb'));
$testHelper->runCRUDTests($cacheInstance);
$testHelper->terminateTest();
