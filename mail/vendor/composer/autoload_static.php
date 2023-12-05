<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd970bba1111b07d47dd121ebb76f4032
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd970bba1111b07d47dd121ebb76f4032::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd970bba1111b07d47dd121ebb76f4032::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd970bba1111b07d47dd121ebb76f4032::$classMap;

        }, null, ClassLoader::class);
    }
}
