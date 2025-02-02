<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8234890ed9f1bcad4863fdc6cf561cfe
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

        spl_autoload_register(array('ComposerAutoloaderInit8234890ed9f1bcad4863fdc6cf561cfe', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8234890ed9f1bcad4863fdc6cf561cfe', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8234890ed9f1bcad4863fdc6cf561cfe::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
