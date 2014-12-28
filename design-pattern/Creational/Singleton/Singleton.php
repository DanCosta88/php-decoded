<?php

namespace DesignPattern\Creational\Singleton;


class Singleton {

    /**
     * Attribute to save unique instance
     * @var null
     */
    static private $_instance = NULL;


    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    /**
     * Static Method key of Singleton Pattern, here we create/get the unique class instance.
     *
     * @return Singleton|null
     */
    public static function getInstance() {

        if (self::$_instance == NULL) {

            self::$_instance = new Singleton();

        }

        return self::$_instance;
    }



}