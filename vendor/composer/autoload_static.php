<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfb7b1ad44c1cc6d79ecc5e04fb2cadf
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfb7b1ad44c1cc6d79ecc5e04fb2cadf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfb7b1ad44c1cc6d79ecc5e04fb2cadf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
