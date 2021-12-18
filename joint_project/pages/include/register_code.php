<?php
session_start();
include '../database.php';

if (isset($_POST['register'])){
    $register_student= $dbconnect->prepare("INSERT INTO  student (full_name, email, assign_id, password) VALUE( ?,?,?,?,)");  
    $register_student->bind_param("ssss", $full_name,  $email, $assign_id, $password);

     
    $full_name =mysqli_real_escape_string($dbconnect, $_POST['full_name']);
    $email =mysqli_real_escape_string($dbconnect, $_POST ['email']);
    $password = mysqli_real_escape_string($dbconnect, $_POST['password']);
    $assign_id = $email.$password.rand(999999999999,111111111111);
    
    $register_student->execute();
}

?>