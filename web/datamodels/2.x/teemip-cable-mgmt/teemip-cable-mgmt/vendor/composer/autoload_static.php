<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd11ec4822064d2406238031831ce520b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeemIp\\TeemIp\\Extension\\CableManagement\\' => 40,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeemIp\\TeemIp\\Extension\\CableManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Controller\\CableMgmtController' => __DIR__ . '/../..' . '/src/Controller/CableMgmtController.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Helper\\DisplayWiring' => __DIR__ . '/../..' . '/src/Helper/DisplayWiring.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Hook\\CableMgmtOtherActions' => __DIR__ . '/../..' . '/src/Hook/CableMgmtOtherActions.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Model\\_CrossConnect' => __DIR__ . '/../..' . '/src/Model/_CrossConnect.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Model\\_NetworkSocket' => __DIR__ . '/../..' . '/src/Model/_NetworkSocket.php',
        'TeemIp\\TeemIp\\Extension\\CableManagement\\Model\\_PatchPanel' => __DIR__ . '/../..' . '/src/Model/_PatchPanel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd11ec4822064d2406238031831ce520b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd11ec4822064d2406238031831ce520b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd11ec4822064d2406238031831ce520b::$classMap;

        }, null, ClassLoader::class);
    }
}