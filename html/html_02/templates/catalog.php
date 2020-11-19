<div class="container">
    <h2>Каталог товаров</h2>
    <div class="goods-row">
            <?php
                $goods = [
                    [
                        'good-link' => 'index.php?page=buh',
                        'good-name' => '1С:Бухгалтерия',
                        'good-img' => 'img/buh-min.jpg',
                        'alt' => 'buh',
                        'good-price' => '5400 руб.',
                    ],
                    [
                        'good-link' => 'index.php?page=zup',
                        'good-name' => '1С:Зарплата',
                        'good-img' => 'img/zup-min.jpg',
                        'alt' => 'zup',
                        'good-price' => '7600 руб.',
                    ],
                    [
                        'good-link' => 'index.php?page=retail',
                        'good-name' => '1С:Розница',
                        'good-img' => 'img/retail-min.jpg',
                        'alt' => 'retail',
                        'good-price' => '3600 руб.',
                    ]
                ];
            ?>
            <?php foreach ($goods as $good): ?>
                <a href="<?php echo $good['good-link']; ?>">
                    <div class="good">
                        <div class="good-name">
                            <h3><?php echo $good['good-name']; ?></h3>
                        </div>
                        <div class="good-img">
                            <img src="<?php echo $good['good-img']; ?>" alt="<?php echo $good['alt'];?>"/>
                        </div>
                        <div class="good-price">
                            <p><?php echo $good['good-price']; ?></p>
                        </div>
                        <div class="good-link">
                            Перейти к товару
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

    </div>
</div>