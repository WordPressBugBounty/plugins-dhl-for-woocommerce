<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite7dc7bb34f9f3b770982a52befec5383
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

        spl_autoload_register(array('ComposerAutoloaderInite7dc7bb34f9f3b770982a52befec5383', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite7dc7bb34f9f3b770982a52befec5383', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite7dc7bb34f9f3b770982a52befec5383::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
