<?php
function _log_($logfile){
    $dr = fopen("./app/logs/".$logfile,"w");
    $wr = fwrite($dr,$_SERVER['REMOTE_ADDR']." > ".gmdate("Y-m-d\TH:i:s\Z", $_SERVER['REQUEST_TIME'])."\n");
    fclose($dr);
}