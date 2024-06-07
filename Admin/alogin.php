<?php
include "conn.php";

session_start();

if(isset($_POST['submitbtn'])){
   
    $email=$_POST['email'];
    $pass=$_POST['pass'];

        if($email=="" || $pass==""){
            $msg=1;
        }else{
            $qu1="Select * from  adminlogin where aemail='$email' and apass='$pass'";
            $re1=mysqli_query($conn,$qu1);
           if(mysqli_num_rows($re1)>0){
            $arr=mysqli_fetch_assoc($re1);
            $_SESSION['aemail']=$email;
            $_SESSION['adminloged']=$arr['id'];
            $_SESSION['adminstatus']=true;
            header('Location: aDashboard.php');
           }else{
            $msg=2;
           }
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>
<div class="signup">
    <div class="row">
        <form action="" method="POST" class="signupform">
        <h1 class="text-center fw-bold py-3">ADMIN LOGIN</h1>
            <div class="col-md-12">
                <input type="email" placeholder="Email" name="email" id="email" class="form-control">
                <span id="emailError" class="error" style="display:none;"></span><br>
            </div>
            <div class="col-md-12">
                <input type="password" name="pass" placeholder="Password" id="password" class="form-control">
                <span id="passwordError" class="error" style="display:none;"></span><br>
            </div>
            <div>
                <button type="submit" name="submitbtn" class="btn btn-dark">Button</button>
                
                <?php
                if(isset($msg)){
                    if($msg==2){
                       echo '<span  class="fw-bold alert alert-danger" style="">Wrong Credientials</span><br>';
                    }elseif($msg==1){
                        echo '<span  class="Error alert alert-danger" style="">all field required dsafsd</span><br>';
                    }
                }

                ?>
            </div>
        </form>
    </div>
</div>
</body>
<script>


$(document).ready(function(){
            $("#email").keyup(function () { 
                var email = $("#email").val();
                // let emailRegex=/^([A-z0-9]+)@([A-z]+)\.([A-z]+)$/g;
                let emailRegex = /^[\w.-]+@[a-zA-Z]+\.[a-zA-Z]+$/;

                if (!emailRegex.test(email)) {
                    $("#email").css("border","2px solid red");
                    $("#emailError").text("Please enter a valid Email.").css("color","red").show();
                } else {
                    $("#email").css("border","2px solid green");
                    $("#emailError").hide();
                }
            });

            $("#password").keyup(function () { 
                var password = $("#password").val();
                // let emailRegex=/^([A-z0-9]+)@([A-z]+)\.([A-z]+)$/g;
                
                let passwordRegex = /^[\w.-]{5,}$/;

                if (!passwordRegex.test(password)) {
                    $("#password").css("border","2px solid red");
                    $("#passwordError").text("The password must be atleast 5 characters.").css("color","red").show();
                } else {
                    $("#password").css("border","2px solid green");
                    $("#passwordError").hide();
                }
            });
});
</script>
</html>