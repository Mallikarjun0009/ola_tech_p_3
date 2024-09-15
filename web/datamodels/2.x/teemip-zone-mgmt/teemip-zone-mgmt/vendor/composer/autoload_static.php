<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8287cab5f6268c0891a3635490df7bdd
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeemIp\\TeemIp\\Extension\\ZoneManagement\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeemIp\\TeemIp\\Extension\\ZoneManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TeemIp\\TeemIp\\Extension\\ZoneManagement\\Hook\\ReleaseRRsFromObsoleteIPs' => __DIR__ . '/../..' . '/src/Hook/ReleaseRRsFromObsoleteIPs.php',
        'TeemIp\\TeemIp\\Extension\\ZoneManagement\\Model\\_Zone' => __DIR__ . '/../..' . '/src/Model/_Zone.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8287cab5f6268c0891a3635490df7bdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8287cab5f6268c0891a3635490df7bdd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8287cab5f6268c0891a3635490df7bdd::$classMap;

        }, null, ClassLoader::class);
    }
}
