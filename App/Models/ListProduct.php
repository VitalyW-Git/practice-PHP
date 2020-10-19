<?php


namespace App\Models;


class ListProduct
{
    public function getArrayDb($db)
    {
        $data = [];
        foreach ($db as $k => $v) {
            $temp = (array)$v;
            $item = [
                'id' => $temp['id'],
                'parent_id' => (int)$temp['parent_id'],
                'price' => (int)$temp['price'],
                'name' => $temp['name'],
            ];
            $data[$temp['id']] = $item;
        }
        return $this->treeArr($data);
    }

    public function treeArr($dataset)
    {
        $tree = array();
        foreach ($dataset as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] =& $node;
            } else {
                $dataset[$node['parent_id']]['childs'][$id] =& $node;
            }
        }
        return $tree;
    }
}

