<?php
return array('default' => env('CACHE_DRIVER', 'file'), 'stores' => array('apc' => array('driver' => 'apc'), 'array' => array('driver' => 'array'), 'database' => array('driver' => 'database', 'table' => 'cache', 'connection' => null), 'file' => array('driver' => 'file', 'path' => storage_path('framework/cache/data')), 'memcached' => array('driver' => 'memcached', 'persistent_id' => env('MEMCACHED_PERSISTENT_ID'), 'sasl' => array(env('MEMCACHED_USERNAME'), env('MEMCACHED_PASSWORD')), 'options' => array(), 'servers' => array(array('host' => env('MEMCACHED_HOST', '127.0.0.1'), 'port' => env('MEMCACHED_PORT', 11211), 'weight' => 100))), 'redis' => array('driver' => 'redis', 'connection' => 'default')), 'prefix' => env('CACHE_PREFIX', str_slug(env('APP_NAME', 'laravel'), '_') . '_cache'));