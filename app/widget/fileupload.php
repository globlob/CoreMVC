<?php
    function upload($inputname,$save_area,$name,$oter){
        if($_FILES[$inputname]){
            $kaynak = $_FILES[$inputname]["tmp_name"];
            $file   = $_FILES[$inputname]["name"];
            $kontr = pathinfo($file, PATHINFO_EXTENSION);
            if ($kontr == "png" or $kontr == "jpeg" or $kontr == "jpg" or $kontr == "gif" or $kontr == "JPEG" or $kontr == "JPG" or $kontr == "PNG" or $kontr == "GIF")
            {
                $upload = move_uploaded_file($kaynak, $save_area.$name.$kontr);
                $oter;
            }
        }
    }