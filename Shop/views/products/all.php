<?php
namespace Shop\views\product;
?>

<ul>
        <?php foreach ($products as $product): ?>
                <li><?= $product['title'] ?></li>
        <?php endforeach; ?>
</ul>