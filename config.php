<?php
    $conx = mysqli_connect("localhost","root","","user");
    if(!$conx){
        echo 'Connection Failed';
    }