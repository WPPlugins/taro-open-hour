<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9892a3f3bed05a4e69be8f6e0620b9e
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Tarosky\\OpenHour\\' => 
            array (
                0 => __DIR__ . '/../..' . '/app',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite9892a3f3bed05a4e69be8f6e0620b9e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
