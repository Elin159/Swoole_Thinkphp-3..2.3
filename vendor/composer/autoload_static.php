<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite743b0b5e6fdd9c8538f34164e19860f
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '968b13b9abb3514a5bb0365cd5f391eb' => __DIR__ . '/..' . '/jpush/jpush/src/JPush/JPush.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'U' => 
        array (
            'Upyun\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'Flc\\Dysms\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'Upyun\\' => 
        array (
            0 => __DIR__ . '/..' . '/upyun/sdk/src/Upyun',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Flc\\Dysms\\' => 
        array (
            0 => __DIR__ . '/..' . '/flc/dysms/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'jpush' => 
            array (
                0 => __DIR__ . '/..' . '/jpush/jpush/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite743b0b5e6fdd9c8538f34164e19860f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite743b0b5e6fdd9c8538f34164e19860f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite743b0b5e6fdd9c8538f34164e19860f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
