<?php
include "Admin/conn.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $cnic=$_POST['cnic'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];


        if($name=="" || $fname=="" || $cnic=="" || $email=="" || $pass==""){
            $msg=2;
        }else{
            $query1="Select * from  registred_users where u_email='$email'";
            $res1=mysqli_query($conn,$query1);
           if(mysqli_num_rows($res1)>0){
            $msg="found";
    
           }else{

            $query="INSERT INTO registred_users(u_name,u_fname,u_cnic,u_email,u_pass)values('$name','$fname','$cnic','$email','$pass')";

            $res=mysqli_query($conn,$query);
            if($res){
                $msg = 1;
            }

           }

          
        }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Registration</title>
</head>
<body>
<div class="signup">
    <div class="row">
        <form action="" method="POST" class="signupform" id="signupform">
        <h1 class="text-center fw-bold py-3">Sign Up</h1>
            <div class="col-md-12">
                <input type="text" placeholder="Name" name="name" id="name" class="form-control">
                <span id="nameError" class="error" style="display:none;"></span>
                <br>
            </div>
            <div class="col-md-12">
                <input type="text" placeholder="Father Name" name="fname" id="fname" class="form-control">
                <span id="fnameError" class="error" style="display:none;"></span><br>
            </div>
            <div class="col-md-12">
                <input type="text" placeholder="CNIC" name="cnic" id="cnic" class="form-control">
                <span id="cnicError" class="error" style="display:none;"></span><br>
            </div>
            <div class="col-md-12">
                <input type="email" placeholder="Email" name="email" id="email" class="form-control">
                <span id="emailError" class="error" style="display:none;"></span><br>
            </div>
            <div class="col-md-12">
                <input type="password" placeholder="Password" name="pass" id="password" class="form-control">
                <span id="passwordError" class="error" style="display:none;"></span><br>
            </div>
                 <button type="submit" name="submit" id="submit" class="btn btn-dark">Button</button>
                 <a href="login.php" class="text-primary float-end">Already have an account ?</a><br><br>
                 <span  class="fw-bold alert alert-info" style="display:none;" id="allfieldrequired"></span><br>
                <?php
                if(isset($msg)){
                    if($msg==1){
                       echo '<span  class="fw-bold alert alert-success" style="">Registration Successfull</span><br>';
                    }elseif($msg==2){
                        echo '<span  class="Error alert alert-danger" style="">all field required</span><br>';
                    }elseif($msg=="found"){
                        echo '<span  class="Error alert alert-danger" style="">User Already Exist</span><br>';
                    }
                    else{
                        echo '<span  class="Error alert alert-danger" style="">Registration Failed</span><br>';
                    }
                }
                ?>
        </form>
    </div>
</div>
</body>

<script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>


<script>


$(document).ready(function(){

   

            $("#name").keyup(function () { 
                var name = $("#name").val();
                var nameRegex = /^[a-zA-Z ]+$/;
            
                if (!nameRegex.test(name)) {
                    $("#name").css("border","2px solid red");
                    $("#nameError").text("Please enter a valid name.").css("color","red").show();
                } else {
                    $("#name").css("border","2px solid green");
                    $("#nameError").hide();
                }
               
            });


            $("#fname").keyup(function () { 

                var fname = $("#fname").val();
                var fnameRegex = /^[A-z ]+$/g;
            
                 if (!fnameRegex.test(fname)) {
                    $("#fname").css("border","2px solid red");
                    $("#fnameError").text("Please enter a valid name.").css("color","red").show();
                } else {
                    $("#fname").css("border","2px solid green");
                    $("#fnameError").hide();
                }

            });

             $("#cnic").keyup(function () { 
                var cnic = $("#cnic").val();
                let cnicRegex = /^(\d{5})-(\d{7})-(\d{1})$/;
                if (!cnicRegex.test(cnic)) {
                    $("#cnic").css("border","2px solid red");
                    $("#cnicError").text("Please enter a valid CNIC.").css("color","red").show();
                } else {
                    $("#cnic").css("border","2px solid green");
                    $("#cnicError").hide();
                }
            });
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