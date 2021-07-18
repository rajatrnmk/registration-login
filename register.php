<?php 
//making connection with database
include("connect.php");
//collecting the data from input fields
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
//inserting input data into database
$moveToDatabase = mysqli_query($connect,"INSERT INTO udata(fullname,email,password)VALUES('$fullname','$email','$password')");
//checking the connection between database & registration page
if($moveToDatabase){
    echo '
        <script>
           alert("registration successfull!");
           window.location = "login.html";
        </script>
       ';

}else{
    echo '
        <script>
           alert("cant able reister :(");
           window.location ="index.html";
        </script>
       ';

}
?>