<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdefd20c0b1073c589f3ac37e47d6f20f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdefd20c0b1073c589f3ac37e47d6f20f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdefd20c0b1073c589f3ac37e47d6f20f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
