<?php
require './../inc/head-partials.tpl.php';
require './../data/menus.php';
require './../utils/functions.php';

$indexMenu = $_GET['indexMenu'];

displayMenu($menus[$indexMenu]);

require './../inc/footer-partials.tpl.php';
