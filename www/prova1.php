<?php

$mysqli =new mysqli("localhost", "root", "", "coolpost");

$result_set = $mysqli->query("SHOW TABLES FROM coolpost LIKE 'cool_users'");

if($result_set->num_rows == 1){
    echo 'true';
}else {
    echo 'false';
}

$mysqli->close();
