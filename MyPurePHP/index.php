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
            
            // $createtable = "CREATE TABLE address_book.people ( id INT NOT NULL AUTO_INCREMENT , name VARCHAR(30) NOT NULL , lastname VARCHAR(30) NOT NULL , email VARCHAR(100) NOT NULL , phone INT(20) NOT NULL , address VARCHAR(255) NOT NULL , upltime TIMESTAMP NOT NULL , PRIMARY KEY (id))";
            // if(mysqli_query($connec,$createtable)){
            //     echo("Connection successful and Database is Created.\n table also created");
            // }
        // }else{
        //     echo( mysqli_error($connec));
        // }

        echo("<button><a href='read.php'>create 1 data</a></button>");
        
    }
    





?>