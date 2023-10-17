<?php

require_once './config.php';
require_once './db_connect.php';

// User Creation in databse 
function UserCreation($conn, $userName, $userEmail, $userPassword, $userRandomId ){
    $sqlQuery = mysqli_query($conn, "INSERT INTO cm_user(name, email, password, randomid) VALUES('{$userName}','{$userEmail}','{$userPassword}','{$userRandomId});'");
    if($sqlQuery){
        return true;
    }else{
        return false;
    }
}

// Uniqueid check same or not 
function UniqueID(){
    
}

// In database user is Present or not
function UserPresent($conn, $userEmail){
    $sqlQuery = mysqli_query($conn, "SELECT email FROM cm_user WHERE email = '{$userEmail}';");
    if($sqlQuery){
        return true;
    }else{
        return false;
    }
    mysqli_close($conn);
}

// Password match to database and which is given by user
function PasswordMatch($conn, $userPassword, $userEmail){
    $sqlQuery = mysqli_query($conn, "SELECT password FROM cm_user WHERE email = '{$userEmail}';");
    while($result = mysqli_num_rows($sqlQuery)){
        if(password_verify($userPassword, $result['password'])){
            return true;
        }else{
            return false;
        }
    }
    mysqli_close($conn);
}

// Random Password Generating
function RandomPassword(){
    $RandomPassword = "cm@".rand(10, 10000)."das#1!20th";
    return $RandomPassword;
}

// Otp Generator
function OtpGenerator(){
    $Otp = rand(10,1000);
    return $Otp;
}

// Random id Genertor
function RandomUserId(){
    $RandId = uniqid();
    return $RandId;
}


