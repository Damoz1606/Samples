<?php

class Link
{
    static function get_link($link)
    {
        if (
            $link == "home" ||
            $link == "about" ||
            $link == "services" ||
            $link == "contact"
        ) {
            $module = "./views/templates/" . $link . ".php";
        } else {
            $module = "./views/templates/home.php";
        }
        return $module;
    }
}
