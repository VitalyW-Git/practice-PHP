<?php

namespace App\Models;

use App\Models\Db\Connection;

class Catalog extends ListProduct
{
    protected const TABLE = 'chairs';

    public $id;
    public $name;
    public $price;
    public $parent_id;

    public static function findLast()
    {
        $db = new Connection();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC';
        $db =  $db->query($sql, [], static::class);
        $base = new Catalog();
        return $base->getArrayDb($db);
    }
}
