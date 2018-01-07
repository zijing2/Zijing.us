<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite375efa523fa3975264e6c971e455e36
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
    );

    public static $prefixesPsr0 = array (
        'N' => 
        array (
            'Nwidart\\DbExporter' => 
            array (
                0 => __DIR__ . '/..' . '/nwidart/db-exporter/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite375efa523fa3975264e6c971e455e36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite375efa523fa3975264e6c971e455e36::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite375efa523fa3975264e6c971e455e36::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
