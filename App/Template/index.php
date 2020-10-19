<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <title>Сайт</title>
</head>
<body>

<div class="flex-container">
    <?php
    $cnt = 0;
    foreach ( $this->furniture['5']['childs'] as $v ) :
        $cnt++;
        if ( $cnt % 3 == 0 ) :
            echo "<br>";
            $cnt = 1;
        endif; ?>
        <div class="product-col">
            <div class="text">
                <h2>Сollection</h2>
                <h3><?= $v['name']; ?></h3>
            </div>
        </div>
        <?php foreach ( $v['childs'] as $k ) :
        $cnt++;
        ?>
        <div class="product-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQLOhzf2aP3F5aPjjfTfQp20yKqxiYbXLksLg&usqp=CAU">
            <div class="product-list">
                <h3><?= $k['name']; ?></h3>
                <span class="price">₽ <?= $k['price']; ?></span>
            </div>
        </div>
    <? endforeach; ?>
    <? endforeach; ?>
</div>

</body>
</html>