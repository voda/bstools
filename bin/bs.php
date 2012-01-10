#!/usr/bin/env php
<?php
require_once __DIR__ . '/../lib/Symfony/Component/ClassLoader/UniversalClassLoader.php';
$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespace('Symfony', __DIR__ . '/../lib');
$loader->registerNamespace('Bstools', __DIR__ . '/../lib');
$loader->register();

require_once __DIR__ . '/../lib/pheanstalk/pheanstalk_init.php';

$app = new Bstools\App();
$app->run();