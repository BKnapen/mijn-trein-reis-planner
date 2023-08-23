<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d1827dc0688c6e507d398e496596221
{
    public static $files = array (
        'aeff9f3eeeea86a7295e5c3ba39cf6f2' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webkompanen\\Mijntreinreis\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webkompanen\\Mijntreinreis\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d1827dc0688c6e507d398e496596221::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d1827dc0688c6e507d398e496596221::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d1827dc0688c6e507d398e496596221::$classMap;

        }, null, ClassLoader::class);
    }
}
