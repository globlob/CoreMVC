<?php

function golink($golink){
    $rodre = str_replace("@","/",$golink);
    return $rodre;
}