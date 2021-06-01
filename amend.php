<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="creden";

$conn= mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
        die("connection failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];
        
    $sql_query = "INSERT INTO payment (firstname,email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,cvv)
    VALUES ('$firstname','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
        
    if (mysql_query($conn,$sql_query))
    {
       echo "Payment Successfully !";
    }
    else
    {
      echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>