<?php
require './../inc/head.tpl.php';
require './../data/menus.php';
require './../utils/functions.php';

$indexMenu = $_GET['indexMenu'];

displayMenu($menus[$indexMenu]);

require './../inc/footer.tpl.php';
