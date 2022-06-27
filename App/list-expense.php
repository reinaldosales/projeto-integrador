<?php

require __DIR__ .'/vendor/autoload.php';

session_start();

include __DIR__ .'/actions/listExpense.php';

include __DIR__ .'/actions/filterExpense.php';

include __DIR__ .'/actions/deleteExpense.php';

include __DIR__ .'/includes/header.php';

include __DIR__ .'/includes/menu.php';

include __DIR__ .'/pages/list-expense.php';

include __DIR__ .'/includes/footer.php';
