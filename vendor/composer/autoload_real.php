<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5b114711e03d9ae5fd470560fda9fcc1
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit5b114711e03d9ae5fd470560fda9fcc1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5b114711e03d9ae5fd470560fda9fcc1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5b114711e03d9ae5fd470560fda9fcc1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}