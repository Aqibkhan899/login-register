<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter Your name" required>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="text" name="password" placeholder="Enter Your Password" required>
        <input type="hidden" value="customer" name="role">
        <input type="Submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    include("connect.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        $query="insert into users(name,email,password,role)values('$name','$email','$password','$role')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo "<script>alert('Registration Successfully Added!')
                    window.location.href='login.php';
            </script>";
        }
        else{
            echo "<script>alert('Registration Successfully not Added!')
                    window.location.href='register.php';
            </script>";
        }
    }

?>