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
        $insert = "INSERT INTO address_book.people(name,lastname,email,phone,address) values('Thiha','Ko Ko','thihasithu0224@gmail.com','0996342208','Hlaing townshipyangon');";
        
        if(mysqli_query($connec,$insert)){
            $last_entry = mysqli_insert_id($connec);
            echo("Connection successful and Database is Created.\n table also created last id=".$last_entry);
            echo("<button><a href='read.php'>view datas</a></button>");
        }else{
            echo("error error ");
        }
        
    }
    





?>