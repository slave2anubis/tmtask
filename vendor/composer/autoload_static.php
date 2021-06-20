<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ba7acba6190f32e2954f31b2b6d17c3
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ba7acba6190f32e2954f31b2b6d17c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ba7acba6190f32e2954f31b2b6d17c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ba7acba6190f32e2954f31b2b6d17c3::$classMap;

        }, null, ClassLoader::class);
    }
}
