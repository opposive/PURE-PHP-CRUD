<?php 

    
$server = "localhost";
$user = "root";
$password = "";
$db = "";

// connection
$connec = mysqli_connect($server,$user,$password);

        $id = $_GET['uid'];
        $req = "SELECT * FROM address_book.people WHERE id=$id";
        $result = mysqli_query($connec,$req);
        $row = mysqli_fetch_assoc($result);
        
        $nameget = $row['name'];
        $emailget  = $row['email'];
        $phoneget  = $row['phone'];
        $passwordget = $row['address'];
        
        echo("previous>>>>>>id:\t\t".$id." name:".$name." mail:".$email." House:".$address." phone:".$phone);
        
            $insert = "UPDATE address_book.people SET name='Mg Thi',email='mgthi@gmail.com',phone='0996342207',address='address' WHERE id= $id";
            $result = mysqli_query($connec,$insert);
            if($result){
                header('location:read.php');
            }else{
                echo mysqli_error($connec);
            }
        // if($result){
            //     $name = $result['name'];
            //     $email = $result['email'];
            //     $phone = $result['phone'];
            //     $password = $result['password'];
        // }
?>