<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
    ->exclude('vendor')
    ->exclude('node_modules')
    ->exclude('storage')
    ->exclude('bootstrap/cache')
    ->in(__DIR__);

return (new Config())
    ->setRules([
        '@PSR2' => true,
    ])
    ->setFinder($finder);