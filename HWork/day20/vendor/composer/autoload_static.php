<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89dbf1d0586eb219c9f51fbd04b7ab7d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89dbf1d0586eb219c9f51fbd04b7ab7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89dbf1d0586eb219c9f51fbd04b7ab7d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
