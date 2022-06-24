<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/createRevenue.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/revenue.php';

include __DIR__ .'/includes/footer.php';
