<?php 
//making connection with database
include('connect.php');
//collecting the data from input fields
$email = $_POST['email'];
$password = $_POST['password'];
//making query with data base
$check = mysqli_query($connect,"SELECT *FROM udata WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($check)>0){
    echo '
        <script>
           alert("login sucessfull!");
           window.location = "dashboard.html";
        </script>
       ';
}else{
    echo '
        <script>
           alert("invalid login credentials");
           window.location ="login.html";
            
        </script>
       ';
}
?>
