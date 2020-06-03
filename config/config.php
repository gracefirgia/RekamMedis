<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

$con = mysqli_connect("localhost", "root", "", "RekamMedisRS");
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}

//fungsi base url
function base_url($url = null) {
    $base_url = "http://localhost/RekamMedisRS";
    if($url != null) {
        return $base_url."/".$url;
    }else{
        return $base_url;
    }

}
?>