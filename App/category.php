<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/createCategory.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/category.php';

include __DIR__ .'/includes/footer.php';
