<?php

    if($_SERVER['SERVER_NAME'] == 'localhost')
    {
        define('ROOT', 'http://localhost/flotila/public'); 
    }else
    {
        define('ROOT', 'https://flotilaboltfood.cz/');
    }
   
    
