<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/listRevenue.php';

include __DIR__ .'/actions/filterRevenue.php';

include __DIR__ .'/actions/deleteRevenue.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/list-revenue.php';

include __DIR__ .'/includes/footer.php';
