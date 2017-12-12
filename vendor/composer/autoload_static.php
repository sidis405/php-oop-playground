<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7548bd575af5bdccf478aec36692c230
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Marvel\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Marvel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7548bd575af5bdccf478aec36692c230::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7548bd575af5bdccf478aec36692c230::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}