<?php

if(!function_exists('show')){

    /**
     * This function a implements Show Message.
     * 
     * @param  string $message
     * @author David Rivero <[<davidmriverog@gmail.com>]>
     * @return string
     */
    function show($message){
        echo "<p> {$message} </p>";
    }
}
