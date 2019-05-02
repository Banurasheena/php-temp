<?php

if (!empty($_SERVER['HTTPS']))
{
    echo 'Page is called from https';
}
else
{
    echo 'Page is called from http';
}
?>