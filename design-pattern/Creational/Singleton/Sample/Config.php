<?php

namespace App\Creational\Singleton\Sample;


class Config {

    /**
     * Attribute to save unique instance
     * @var null
     */
    static private $_instance = NULL;

    /**
     * A sample key/value array attribute to save Config settings.
     *
     * @var array
     */
    private $_settings = array();

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    /**
     * Static Method key of Singleton Pattern, here we create/get the unique class instance.
     *
     * @return Config|null
     */
    public static function getInstance() {

        if (self::$_instance == NULL) {

            self::$_instance = new Config();

        }

        return self::$_instance;
    }


    /**
     * Sample method to get generic $key settings.
     *
     * @param $key
     * @return bool
     */
    public function get($key) {

        if(! isset($this->_settings[$key])) {

            return false;

        }

        return $this->_settings[$key];

    }


    /**
     * Sample method to set generic $key settings.
     *
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value) {

        if(! isset($this->_settings[$key])) {

            return false;

        }

        $this->_settings[$key] = $value;

        return true;

    }


}