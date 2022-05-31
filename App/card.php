<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/createCard.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/card.php';

include __DIR__ .'/includes/footer.php';
