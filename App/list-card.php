<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/listCard.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/list-card.php';

include __DIR__ .'/includes/footer.php';
