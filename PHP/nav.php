<?php

$nav = ['index', 'gallery', 'contact'];

foreach ($nav as $link) {
    echo '<li><a href="'. $link . '.php">'. $link . '</a></li>';
}

?>