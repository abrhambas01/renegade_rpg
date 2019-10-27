<?php
/*functions that can be used all over the system or debugging and also deploying apps*/

function view($view, $data=[]){
    extract($data); 
    require "views/{$name}.view.php";
}


/*te name speaks for itself*/

function checks_if_class_does_exist($class_name)
{
	
}

function dd()   
{
    array_map(function($x) { 
        dump($x); 
    }, func_get_args());
    die;	
}

function redirect($path){
    session_write_close();
    header("Location:".$path);
    exit ; 
}