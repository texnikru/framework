<?php namespace Illuminate\Container;

use Closure;
use ArrayAccess;
use ReflectionClass;
use ReflectionParameter;

if(version_compare(PHP_VERSION, '8.1.0') >= 0) {
	require_once __DIR__ . '/Container-php8.1.php';
} else {
	require_once __DIR__ . '/Container-php7.x.php';
}
