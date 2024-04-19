<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25ecfecef4b3929083b1ea1cb4076ed9
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25ecfecef4b3929083b1ea1cb4076ed9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25ecfecef4b3929083b1ea1cb4076ed9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25ecfecef4b3929083b1ea1cb4076ed9::$classMap;

        }, null, ClassLoader::class);
    }
}
