<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17c6eefa74af4bfb7b24f3a05da69c77
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17c6eefa74af4bfb7b24f3a05da69c77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17c6eefa74af4bfb7b24f3a05da69c77::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
