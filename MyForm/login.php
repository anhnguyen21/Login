<?php
    $kt=false;
    $arrUser= array("admin","admin1");
    $arrPass= array(1,2);
    $name = $_POST["user"];
    $pass= $_POST["pass"];
    for($i=0;$i<count($arrPass);$i++){

        if($name==$arrUser[$i]&&$pass==$arrPass[$i]){
            echo "login thanh cong";
            $kt=true;
        }
    }
    if($kt==false){
        echo "login that bai";
    }
?>