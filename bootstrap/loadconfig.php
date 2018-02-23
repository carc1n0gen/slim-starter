<?php

$config = [];

foreach (glob(__DIR__.'/../config/*.php') as $include) {
    $config = array_merge($config, require $include);
}

return $config;
