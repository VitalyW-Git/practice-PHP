<?php


namespace App\Models\Db;


class Config
{
    public $data;

    protected function __construct()
    {
        $this->data = require_once __DIR__ . '/../../Data/config.php';
    }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

}