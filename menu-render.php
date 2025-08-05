<?php
include 'menu-data.php';
?>
    <div class="menu-header">
        <div class="menu-header__top">
            <h2 class="roboto-slab-font">Our Menu</h>
            <!-- Potential Search Button  -->
        </div>

        <nav class="menu-header__bottom">
            <button class="menu-categories__arrow left"></button>
            <ul class="menu-categories">
                <?php foreach ($menu as $category => $items): ?>
                    <li class="menu-categories__category"><?php echo htmlspecialchars($category); ?></li>
                <?php endforeach; ?>
            </ul>
            <button class="menu-categories__arrow right"></button>
        </nav>
    </div>

    <div class="full-menu">
    <?php foreach ($menu as $category => $items): ?>
        <h3 class="roboto-slab-font"><?php echo $category; ?></h3>
        <?php if (is_array($items)): ?>
            <ol>
                <?php foreach ($items as $item => $details): ?>
                    <?php if (is_array($details)): ?>
                        <li class="menu-subheader"><?php echo $item; ?>
                            <ol>
                                <?php foreach ($details as $detail): ?>
                                    <li><?php echo $detail; ?></li>
                                <?php endforeach; ?>
                            </ol>
                        </li>
                    <?php else: ?>
                        <li><?php echo $details; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        <?php else: ?>
            <p><?php echo $items; ?></p>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>