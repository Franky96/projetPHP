<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 23:57
 */


function incrementer($i)
{
    $i += 2;
}

//
for ($i = 0; $i < 3; $i++) {
    incrementer($i);
    echo "$i";
}


?>