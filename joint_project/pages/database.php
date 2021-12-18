<?php



$dbconnect = mysqli_connect('localhost', 'root','', 'joint_project');
if (!$dbconnect){
    die ("database connection failed". mysqli_connect_error($dbconnect));
}

?>