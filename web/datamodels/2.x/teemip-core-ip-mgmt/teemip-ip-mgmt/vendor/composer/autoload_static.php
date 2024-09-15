<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2c0e4e7347fc9496b4630d36925ce3f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TeemIp\\TeemIp\\Extension\\IPManagement\\' => 37,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TeemIp\\TeemIp\\Extension\\IPManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Controller\\FindSpace' => __DIR__ . '/../..' . '/src/Controller/FindSpace.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Hook\\AllocateIPsToProductionCIs' => __DIR__ . '/../..' . '/src/Hook/AllocateIPsToProductionCIs.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Hook\\HandleIPWaterMarks' => __DIR__ . '/../..' . '/src/Hook/HandleIPWaterMarks.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Hook\\IPMgmtExtraMenus' => __DIR__ . '/../..' . '/src/Hook/IPMgmtExtraMenus.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Hook\\ReleaseIPsFromObsoleteCIs' => __DIR__ . '/../..' . '/src/Hook/ReleaseIPsFromObsoleteCIs.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Hook\\UnassignIPsWithNoCI' => __DIR__ . '/../..' . '/src/Hook/UnassignIPsWithNoCI.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPAddress' => __DIR__ . '/../..' . '/src/Model/_IPAddress.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPBlock' => __DIR__ . '/../..' . '/src/Model/_IPBlock.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPRange' => __DIR__ . '/../..' . '/src/Model/_IPRange.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPSubnet' => __DIR__ . '/../..' . '/src/Model/_IPSubnet.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPv4Address' => __DIR__ . '/../..' . '/src/Model/_IPv4Address.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPv4Block' => __DIR__ . '/../..' . '/src/Model/_IPv4Block.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPv4Range' => __DIR__ . '/../..' . '/src/Model/_IPv4Range.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\_IPv4Subnet' => __DIR__ . '/../..' . '/src/Model/_IPv4Subnet.php',
        'TeemIp\\TeemIp\\Extension\\IPManagement\\Model\\ormIP' => __DIR__ . '/../..' . '/src/Model/ormIP.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2c0e4e7347fc9496b4630d36925ce3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2c0e4e7347fc9496b4630d36925ce3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2c0e4e7347fc9496b4630d36925ce3f::$classMap;

        }, null, ClassLoader::class);
    }
}
