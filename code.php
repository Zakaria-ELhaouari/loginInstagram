<?php
include 'database.php';
// session_start();
// $con = mysqli_connect("localhost","root","","instagram");

if(isset($_POST['save_date']))
{
    $name = $_POST['username'];
    // $dob = date('Y-m-d', strtotime($_POST['dateofbirth']));
    $pass = $_POST['password'];
    // $query = "INSERT INTO login (email , pass) VALUES ('$name','$pass')";
    // $query_run = mysqli_query($con, $query);

    // 
    if(empty($name) || empty($pass)){
 
        $error = "please fill in the empty fields";
 
        header("Location: index.php?error=".urlencode($error));
 
        exit();


    }else{
        $id = rand(1,99);
        $sql1 = "INSERT INTO infos (id,name, pass)
        VALUES ($id ,'$name', '$pass')";
 
        $result = mysqli_query($conn, $sql1);
 
        if(!$result){
             die('error'. mysqli_error($conn));
        }
 
        header("Location: index.php");
 
       exit();
 
    } 
}
?>