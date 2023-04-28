<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bf5844cec929bf8b5741eef32741039
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amohamed\\Soap\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amohamed\\Soap\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bf5844cec929bf8b5741eef32741039::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bf5844cec929bf8b5741eef32741039::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7bf5844cec929bf8b5741eef32741039::$classMap;

        }, null, ClassLoader::class);
    }
}