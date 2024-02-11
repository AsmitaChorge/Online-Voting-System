<?php
include("connect.php");

$_name = $_POST['name'];
$_mobile= $_POST['mobile'];
$_password = $_POST['pasword'];
$_password = $_POST['password'];
$_address = $_POST['address'];
$_image =$_FILES['photo']['name'];
$tep_name =$_FILES['photo']['tmp_name'];
$role =$_POST['role'];

if($_password==$cpassword){
    move_uploaded_file($tmp_name, "../uploads/$image");
    $insert = mysqli_query($connect, "INSERT INTO user(name, mobile, address, password, photo, role, votes) VALUES ('$name','$mobile', '$address', '$password','$image', '$role', 0, 0)");
    if($insert){
        echo '
        <script>
            alert("Registation successful!");
            window.location ="../";
        </script>
    ';
    }
    else{
        echo '
        <script>
            alert("Some error occured!");
            window.location ="../routes/register.html";
        </script>
    ';
    }
}
else{
    echo '
        <script>
            alert("Password and confirm password does not match!");
            window.location ="../routes/register.html";
        </script>
    ';
    
}




?>

