<?php

$mysqli =new mysqli("localhost", "root", "", "coolpost");

$result_set = $mysqli->query("SELECT * FROM cool_users");

print_r($result_set);

$mysqli->close();
