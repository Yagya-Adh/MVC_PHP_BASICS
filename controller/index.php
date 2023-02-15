<?php

$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

// echo $page;


if ($page == 'home') {
    include('home.php');
} elseif ($page == 'about') {
    include('about.php');
} else {
    include('404.php');
}
