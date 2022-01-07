<?php

    //config
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "";

    // connection
    $connec = mysqli_connect($server,$user,$password);
    if(!$connec){
        $error = mysqli_connect_error($connec);
        echo("Error: Not connected".$error);
    }else{
        // $createdb = "Create Database address_book";
        // if(mysqli_query($connec,$createdb)){
            if(isset($_GET['did'])){
                $id = $_GET['did'];
                $sql = "DELETE from address_book.people Where id = $id";
                    $result = mysqli_query($connec,$sql);
                    if($result){
                        header('location:read.php');
                    }else{
                        echo mysqli_error($result);
                    }
        
            }
            
        // }else{
        //     echo( mysqli_error($connec));
        // }
        
    }
    





?>

 <!--  -->