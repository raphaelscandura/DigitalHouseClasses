<?php

//Defining random password
$password = "12345";
//Encrypted version of defined password
$encPassword = password_hash($password, PASSWORD_DEFAULT);
//User entry
$userEntryPassword = $_POST['password'];

//Checking if user entry equals saved encrypted password
if(password_verify($userEntryPassword, $encPassword)){
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}