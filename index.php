<?php

require __DIR__ . '/App/autoload.php';

use App\Controller\PageController;

$controller = new PageController();

$controller->list();