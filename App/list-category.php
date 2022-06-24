<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/listCategory.php';

include __DIR__ .'/actions/filterCategory.php';

include __DIR__ .'/actions/deleteCategory.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/list-category.php';

include __DIR__ .'/includes/footer.php';
