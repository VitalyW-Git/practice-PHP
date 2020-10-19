<?php

namespace App\Controller;

use App\Models\Catalog;
use App\View\PageView;

class PageController
{
    public function list ()
    {
        $view = new PageView();

        $view->assign('furniture', Catalog::findLast());

        $view->display( __DIR__ . '/../Template/index.php');
    }
}