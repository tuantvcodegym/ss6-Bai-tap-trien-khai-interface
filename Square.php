<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');
include 'index.php';

class Square extends Rectangle implements colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function howToColor()
    {
        echo 'color all four side.';
    }
}