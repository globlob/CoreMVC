<?php
    //Form open method
    function openForm($method = 'POST',$action = '#' ,$att = ''){
        if ($method == '') $method = 'POST';
        if ($action == '') $action = '#';
         $ret = '<form method = "'.$method.'" action = "'.$action.'" '.$att.'>';
         return $ret;
    }
    //Form open method
    function openFormMultipart($method = 'POST',$action = '#' ,$att = ''){
        if ($method == '') $method = 'POST';
        if ($action == '') $action = '#';
        $ret = '<form method = "'.$method.'" enctype="multipart/form-data" action = "'.$action.'" '.$att.'>';
        return $ret;
    }
    //Form close method
    function closeForm(){
        $ret = '</form>';
        return $ret;
    }

    //Form open method
    function input($type = 'text',$name = '' ,$value = '',$att = ''){
        $ret = '<input type = "'.$type.'" name = "'.$name.'" value = "'.$value.'" '.$att.'>';
        return $ret;
    }
    function textarea($name = '' ,$value = '',$att = ''){
        $ret = '<textarea name = "'.$name.'" '.$att.'>'.$value.'</textarea>';
        return $ret;
    }
