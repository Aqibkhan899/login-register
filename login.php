<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="enter your email">
        <input type="text" name="password" placeholder="enter your password">
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>
<?php
    include("connect.php");
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from users where email='$email' and password='$password'";
        $run=mysqli_query($conn,$query);
        $row=mysqli_num_rows($run);
        if($row>0){
            while($data=mysqli_fetch_array($run)){
            if($data['role']=='admin'){
                echo "<script>window.location.href='admin.php'</script>";
            }
            else if($data['role']=='customer'){
                echo "<script>window.location.href='user.php'</script>";
            }
            }
        }
    }
?>