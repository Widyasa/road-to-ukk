<?php

function redirect($string){
    header("Location:" . BASEURL . "$string");
}
function url($path){
    return(BASEURL . "/" . trim($path, "/"));
}