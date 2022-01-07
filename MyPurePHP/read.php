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
        $getcomm = "SELECT * FROM address_book.people";
        $get = mysqli_query($connec,$getcomm);
        if($get){
            while($line = mysqli_fetch_assoc($get)){
                $id =$line['id'];
                $name = $line['name'];
                $email = $line['email'];
                $phone = $line['phone'];
                $address = $line['address'];
                echo("<>id:\t\t".$id."name:".$name."mail:".$email."House:".$address."phone:".$phone);
                echo('<button><a href="delete.php?did='.$id.'">delete</a></button>');
                echo('<button><a href="update.php?uid='.$id.'">Update</a></button>');
                echo("<br><br><br>");
            }
        }else{
            echo "fail";
        }
        echo("<button><a href='create.php'>create 1 data</a></button>");
        
    }
    





?>