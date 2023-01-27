<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ebaaf6a48568a03621094a0bd2b248c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sundarban\\Project\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sundarban\\Project\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ebaaf6a48568a03621094a0bd2b248c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ebaaf6a48568a03621094a0bd2b248c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ebaaf6a48568a03621094a0bd2b248c::$classMap;

        }, null, ClassLoader::class);
    }
}
