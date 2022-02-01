<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefb12856c5f08da07ee087892d71048f
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UAB\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UAB\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitefb12856c5f08da07ee087892d71048f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefb12856c5f08da07ee087892d71048f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefb12856c5f08da07ee087892d71048f::$classMap;

        }, null, ClassLoader::class);
    }
}
