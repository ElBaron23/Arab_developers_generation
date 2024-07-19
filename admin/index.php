x<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arabic_generation developer</title>
</head>
<body>
    
    <div class="container">
    <?php
    include '../inc/cnx.php';
    session_start();
     if(isset($_POST['login'])){
        $admin= $mydb->prepare("SELECT * FROM admin WHERE user=:User AND password=:Password");
        $password=$_POST['password'];
        $user=$_POST['user'];
        $admin->bindParam("User",$user);
        $admin->bindParam("Password",$password);
        $admin->execute();
        if($admin->rowCount() === 1){
            header("location:home.php",true);
        }else{
            echo' <h4>كلمة المرور او اسم المستخدم خاطئ</h4>' ;
        }
}
    ?>
   
        <form action="#" method="post">
        <h4>Admin</h4>
        <input type="text" name="user" placeholder="user">
        <input type="password" name="password" placeholder="enter password">
        <button name="login">Login</button>
        </form>
    </div>
</body>
</html>