<?php
include "../Admin/conn.php";

if(isset($_POST['upost'])){
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